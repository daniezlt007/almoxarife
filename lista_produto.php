<?php
require_once("cabecalho.php");
require_once("config/banco_produto.php");
?>
<br><br><br><br><br><br>
<form align="right" action="produto_form.php">
    <button class="btn btn-primary" type="submit">Novo Produto</button>
</form>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Filial</th>
			<th>Item</th>
			<th>Quantidade</th>
                        <th>Descrição Tipo</th>
                        <th>Número da Devolução</th>
                        <th>Número Nota</th>
                        <th>Devolvido</th>
                        <th>Data</th>
                        <th colspan="2" style="text-align: center;">Operação</th>
		</tr>
	</thead>
    <?php
        $produtos = listaProduto($conexao);
        foreach ($produtos as $produto) :
    ?>
            <td><?= $produto['filial']; ?></td>
            <td><?= $produto['codigo_produto']; ?></td>
            <td><?= $produto['qtd']; ?></td>
            <td><?= $produto['descricao_tipo']; ?></td>
            <td><?= $produto['numero_devolucao']; ?></td>
            <td><?= $produto['numero_nota']; ?></td>
            <td><?= $produto['status']; ?></td>
            <td><?= $produto['data']; ?></td>
            <td align="center"><a class="btn btn-primary" href="marca-altera.php?id_produto=<?= $produto['id_produto']; ?>">alterar</a></td>
            <td align="center">
                <form action="removeMarca.php" method="post">
                    <input type="hidden" name="idProduto" value="<?= $produto['id_produto'] ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>    
       <?php
    endforeach;
    ?>
</table>
<?php include("rodape.php"); ?>