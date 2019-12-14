<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Comanda;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$pedidos = Pedido::all();
        

        $pedidos = DB::table('pedido')
            ->join('item','pedido.id_item','=','item.id')
            ->join('comanda','comanda.id','=','pedido.id_comanda')
            ->select('pedido.*','item.*',DB::raw('(item.preco*pedido.quantidade) as preco_total'))
         
            ->get();
        
        return view('pedido.index',compact('pedidos'));
        //return view('comanda.show', compact('comanda'),compact('pedidos'),compact('item'))->with('total',$total);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $comanda = Comanda::find($id);
        return view('pedido.create',compact('comanda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pedido::create($request->all());
        return redirect()->route('comanda.show',$request->id_comanda);
        return view('pedido.edit', compact('pedido'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = pedido::find($id);
        // select * from corretor where id = $id;
        return view('pedido.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        $pedido = Pedido::find($pedido->id);
        return view('pedido.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('pedido')
            ->where('id', $id)
            ->update(
                [
                    'id_comanda' => $request->id_comanda,
                    'id_item' => $request->id_item,
                    'quantidade' => $request->quantidade,
                    'status' => $request->status
                ]
            );
        return redirect()->route('pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pedido)
    {

        Pedido::destroy($id_pedido);
//        $pedido = pedido::all();

        return redirect()->route('pedido.index');
        //return view('pedido.index', compact('pedido'));
    }

    public function addPedido($id) {
        $comanda = Comanda::find($id);
        $item = Item::all();
        return view('pedido.create',compact('comanda', 'item'));

    }
    public function statusPronto($id){
        DB::table('pedido')
            ->where('id', $id)
            ->update(
                [
                    'status' => 'PRONTO'
                ]
            );
        return redirect()->route('pedido.index');
    }

    public function statusCancelado($id){
        DB::table('pedido')
            ->where('id', $id)
            ->update(
                [
                    'status' => 'CANCELADO'
                ]
            );
        return redirect()->route('pedido.index');
    }
}
