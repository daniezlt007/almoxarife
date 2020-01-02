<?php 
require_once('conecta.php');

function insereProduto($conexao, $codigoProduto,$nomeProduto,$fabricante,$motivo){
    $sql = "insert into produto (codigo_produto, nome_produto, fabricante_produto, motivo) values ({$codigoProduto},'{$nomeProduto}',{$fabricante},'{$motivo}')";
    return mysqli_query($conexao, $sql);
}

function listaProduto($conexao) {
	$produtos = array();
    $rs = mysqli_query($conexao, "select UPPER(f.apelido) as filial,p.id_produto,
    p.codigo_produto,p.qtd,t.descricao_tipo,p.numero_devolucao, 
    p.retorno_fabrica, p.numero_nota, CASE WHEN p.devolvido=0 THEN 'NÃO' ELSE 'SIM' END as status,p.devolvido, 
    p.data from produto p left join filial f on (f.codigo=p.filial_codigo)
    left join tipo_divergencia t on (t.id_tipo=p.tipo_divergencia);"); 
        
    while ($produto = mysqli_fetch_assoc($rs)) {
                array_push($produtos, $produto);
    }
    return $produtos;
}

?>