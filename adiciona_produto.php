<?php 
require_once("cabecalho.php"); 
require_once('config/banco_produto.php');
error_reporting(E_ALL ^ E_NOTICE);

$filial_codigo = $_POST['filial_codigo'];
$tipo_divergencia = $_POST['tipo_divergencia'];
$codigo_produto = $_POST['codigo_produto'];
$qtd = $_POST['qtd'];
$numero_devolucao = $_POST['numero_devolucao'];
$data = $_POST['data'];
$numero_nota = $_POST['numero_nota'];
$devolvido = -1;
if(isset($_POST['devolvido'])){
	$devolvido = 1;
}else{
	$devolvido = 0;
}
$retorno_fabrica = $_POST['retorno_fabrica'];
$status = $_POST['status'];
$flag = insereProduto($conexao, $filial_codigo, $tipo_divergencia, $codigo_produto, $qtd, $numero_devolucao, $data, $numero_nota, $devolvido, $retorno_fabrica, $status);

if($flag){
?>
<br><br><br><br><br>
<p class="alert-success">Controle de divergência do produto <?= $codigo_produto ?> foi adicionado com sucesso.</p>
<?php
}else{
    $msg = mysqli_error($conexao);
?>
<br><br><br><br><br>
<p class="alert-danger">Controle de divergência não adicionado. <?= $msg;?></p>
<?php
}
?>
<?php require_once("rodape.php"); ?>