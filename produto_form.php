<?php
require_once("cabecalho.php");
require_once("config/banco_produto.php");
require_once("config/banco_tipo.php");
require_once("config/banco_filial.php");
$tipos = listaTipos($conexao);
$filiais = listaFiliais($conexao);
?>
<br><br><br>
<h1>Controle de Ajustes - Divergências</h1>
<form action="adiciona_produto.php" method="POST">
    <table class="table">	
        <?php include("produto_form_base.php");?>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>