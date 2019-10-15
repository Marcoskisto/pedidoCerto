# PROJETO LP4 FATEC - Pedido Certo
#### Professor: ![Fernando Sales](https://github.com/fsclaro)

#### Alunos: ![Gisele](https://github.com/giselen), ![Hamilton](https://github.com/camc21), ![Luís Henrique](https://github.com/luisborges06), ![MarcosKisto](https://github.com/marcoskisto)

## Importando o Projeto
1. git clone https://github.com/Marcoskisto/pedidoCerto.git
2. cd pedidoCerto
3. composer install
4. php artisan key:generate
5. criar o Banco "pedidocerto", com user -homestead- e password -secret-
6. * php artisan migrate (migrations ainda não criadas)

## Descrição: 
Sistema de gerenciamento de comandas de restaurante. Tem a finalidade de suprir as necessidades mínimas de atendimento ao cliente em um restaurante.
Um garçom ao atender um cliente em uma mesa, pelo celular deverá abrir uma comanda escolhendo o número da mesa no sistema. A partir daí, irá selecionar no sistema os pratos solicitados pelo cliente e a sua quantidade. Essas informações serão visualizadas pelos funcionários da cozinha que prepararão os pratos. Para fechar a comanda o sistema apresentará o valor total da Comanda que o cliente irá pagar. Depois de paga a comanda será encerrada pelo Garçom, que alterará seu Status de "Aberta" para "Fechada".

## Requisitos Funcionais
* RF001 - Cadastro do usuário;</br>
* RF002 - Alterar Usuários;</br>
* RF003 - Excluir Usuários;</br>
* RF004 - Efetuar Login;</br>
* RF005 - Efetuar Logout;</br>
* RF006 - Criação de Comandas;</br>
* RF007 - Exibição das Comandas;</br>
* RF008 - Inclusão e exclusão de Pedidos nas comandas;</br>
* RF009 - Cadastrar Pratos;</br>
* RF010 - Listar Pratos cadastrados;</br>
* RF011 - Alterar Pratos;</br>
* RF012 - Excluir Pratos;</br>
* RF013 - Alterar Status das comandas.

## Requisitos Não-Funcionais
* RNF001 – O sistema deverá ter uma quantidade máxima de usuários suportados;</br>
* RNF002 - O sistema deverá ter uma quantidade máxima de mesas que poderão ser cadastradas;</br>
* RNF003 - Haverá um limite de pedidos que constarão na comanda;</br>
* RNF004 - Deverá ter um tempo limite de uma sessão de usuário;</br>
* RNF005 - Limite de pedidos por mesa;</br>
* RNF006 - Segurança das informações cadastrais;</br>
* RNF007 - Acesso por HTTPS;
* RNF008 - Banco de Dados MySql
* RNF009 - Linguagem PHP
* RNF010 - Framework Laravel 3.7

## Diagrama de Caso de Uso.
![DER do banco de dados](https://github.com/Marcoskisto/pedidoCerto-lab4-fatec/blob/master/Documentacoes/CasoDeUso_PedidoCerto(Draw%20io).jpg)

## DER do banco de dados.
![DER do banco de dados](https://github.com/Marcoskisto/pedidoCerto/blob/master/Documentacoes/DER_PedidoCerto.jpg)

## Diagrama de Classes.
![Diagrama de Classes](https://github.com/Marcoskisto/pedidoCerto/blob/master/Documentacoes/ClassDiagram.png)
