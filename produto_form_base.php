<br><br>
<form>
<tr>
    <td>Filial*:</td>
            <td>
                <select id="filial_codigo" name="filial_codigo" class="form-control">
                <option value="0">Selecione uma Filial</option>
                <?php
                    foreach ($filiais as $filial) :
                        $esta = $produto['filial_codigo'] == $filial['codigo'];
                        $selecao = $esta ? "selected='selected'" : "";
                        ?>
                        <option value="<?= $filial['codigo'];?>" <?= $selecao; ?>><?php echo $filial['apelido']; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>

            <td>Tipo Divergência*:</td>
            <td>
                <select id="tipo_divergencia" name="tipo_divergencia" class="form-control">
                <option value="0">Selecione um Tipo</option>
                <?php
                    foreach ($tipos as $tipo) :
                        $esta = $produto['tipo_divergencia'] == $tipo['id_tipo'];
                        $selecao = $esta ? "selected='selected'" : "";
                        ?>
                        <option value="<?= $tipo['id_tipo'];?>" <?= $selecao; ?>><?php echo $tipo['descricao_tipo']; ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
</tr>

<tr>
    <td>Item*:</td> 
    <td><input class="form-control" type="text" id="codigo_produto" name="codigo_produto" value="" required></td>
    <td>Quantidade*:</td> 
    <td><input class="form-control" min="0" type="text" id="qtd" name="qtd" value="" required  pattern="[0-9]+$"></td>
</tr>
<tr>
    <td>Nº Devolução*:</td> 
    <td><input class="form-control" type="text" id="numero_devolucao" name="numero_devolucao" value="" required></td>
    <td>Data*:</td> 
    <td><input class="form-control" type="date" id="data" name="data" value="" required></td>
</tr>
<tr>
    <td>Nº Nf*:</td>
    <td><input class="form-control" type="text" id="numero_nota" name="numero_nota" value="" required></td>
	
    <td>Item devolvido? *:</td>
    <td><input class="form-check-input" type="checkbox" id="devolvido" name="devolvido" value="1" ></td>
</tr>
<tr>
    <td>Retorno Fábrica*:</td>
    <td><textarea id="retorno_fabrica" name="retorno_fabrica" class="form-control"></textarea></td>
	
    <td>Status*:</td>
    <td><textarea id="status" name="status" class="form-control"></textarea></td>
</tr>
</form>