<?php 
require_once('conecta.php');

function insereProduto($conexao, $filial_codigo, $tipo_divergencia, $codigo_produto, $qtd, $numero_devolucao, $data, $numero_nota, $devolvido, $retorno_fabrica, $status){
    $sql = "insert into produto(filial_codigo, tipo_divergencia, codigo_produto, qtd, numero_devolucao, data, numero_nota, devolvido, retorno_fabrica, status) 
	values ({$filial_codigo},{$tipo_divergencia},'{$codigo_produto}',{$qtd},'{$numero_devolucao}','{$data}',{$devolvido},'{$numero_nota}','{$retorno_fabrica}','{$status}')";	
    return mysqli_query($conexao, $sql);
}

function listaProduto($conexao) {
	$produtos = array();
    $rs = mysqli_query($conexao, "select UPPER(f.apelido) as filial,p.id_produto,
    p.codigo_produto,p.qtd,t.descricao_tipo,p.numero_devolucao, 
    p.retorno_fabrica, p.numero_nota, CASE WHEN p.devolvido=0 THEN 'NÃO' ELSE 'SIM' END as status,p.devolvido, 
    p.data from produto p left join filial f on (f.codigo=p.filial_codigo)
    left join tipo_divergencia t on (t.id_tipo=p.tipo_divergencia) order by p.data desc;"); 
        
    while ($produto = mysqli_fetch_assoc($rs)) {
                array_push($produtos, $produto);
    }
    return $produtos;
}

?>