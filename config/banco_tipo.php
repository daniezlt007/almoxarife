<?php 
require_once('conecta.php');

function listaTipos($conexao){
    $tipos = array();
    $sql ="select * from tipo_divergencia;";
    $rs = mysqli_query($conexao, $sql);
    while($tipo = mysqli_fetch_assoc($rs)){
        array_push($tipos, $tipo);
    }
    return $tipos;
}