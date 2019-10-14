<?php
class Venda extends nota implements Pedido
{
    public function calcularSomaTotal(){/*Função para o calculo da soma total*/}
}
interface Pedido
{
    public function carrega();
    public function salva();
    public function atualiza();
    public function exclui();
}
abstract class notas extends Produtos
{
    public function imprimePedido(){/*Função para imprimir o pedido*/}
    public function mostraHTMLPedido(){/**/}
}
abstract class Produtos extends Produtos
{
    public function retornaItens(){/**/}
    public function retornaQuantidade(){/**/}
    
}
abstract class Produtos
{
    public function adicionaItem($item){/**/}
    public function excluirItem($item){/**/}
}
?>
