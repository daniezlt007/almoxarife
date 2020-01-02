<?php 
require_once('conecta.php');

function listaFiliais($conexao){
    $filiais = array();
    $sql ="select * from filial;";
    $rs = mysqli_query($conexao, $sql);
    while($filial = mysqli_fetch_assoc($rs)){
        array_push($filiais, $filial);
    }
    return $filiais;
}