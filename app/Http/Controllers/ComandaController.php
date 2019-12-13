<?php

namespace App\Http\Controllers;

use App\Comanda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandas = Comanda::all();
        return view('comanda.index', compact('comandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comanda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comanda::create($request->all());
        return redirect()->route('comanda.index');
        return view('comanda.edit', compact('comanda'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comanda = Comanda::find($id);
        // select * from corretor where id = $id;
        $pedidos = DB::table('pedido')
            ->join('item','pedido.id_item','=','item.id')
            ->select('pedido.*','item.*',DB::raw('(item.preco*pedido.quantidade) as preco_total'))
            ->where('pedido.id_comanda',$id)
            ->get();
        // select * pedidos da comanda $id
        $total = $pedidos->sum('preco_total');
        // calcula valor total da comanda
        return view('comanda.show', compact('comanda'),compact('pedidos'),compact('item'))->with('total',$total);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Comanda $comanda)
    {
        $comanda = Comanda::find($comanda->id);
        return view('comanda.edit', compact('comanda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('comanda')
            ->where('id', $id)
            ->update(
                [
                    'numero_mesa' => $request->titulo_prato,
                    'nome_cliente' => $request->desc_prato,
                    'status' => $request->preco
                ]
            );
        return redirect()->route('comanda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comanda::destroy($id);
//        $item = item::all();

        return redirect()->route('comanda.index');
        //return view('item.index', compact('item'));
    }
}
