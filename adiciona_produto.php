<?php 
require_once("cabecalho.php"); 
require_once('config/banco_produto.php');

$codigoProduto = $_POST['codigo_produto'];
$nomeProduto = $_POST['nome_produto'];
$fabricante = $_POST['fabricante_produto'];
$motivo = $_POST['motivo_produto'];

$flag = insereProduto($conexao, $codigoProduto, $nomeProduto, $fabricante, $motivo);
if($flag){
?>
<p class="alert-success">Produto adicionado com sucesso.</p>
<?php
}else{
    $msg = mysqli_error($conexao);
?>
<p class="alert-danger">Produto não adicionado. <?= $msg;?></p>
<?php
}
?>
<?php require_once("rodape.php"); ?>