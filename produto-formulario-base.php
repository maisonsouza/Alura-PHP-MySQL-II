<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/01/2019
 * Time: 11:35
 */
?>

<tr>
    <td>Produto:</td>
    <td><input name="nome_produto" class="form-control" value="<?= $produto['nome'] ?>"></td>
</tr>

<tr>
    <td>Preço:</td>
    <td><input type="number" name="preco_produto" class="form-control" value="<?= $produto['preco'] ?>"</td>
</tr>

<tr>
    <td>Descrição:</td>
    <td><textarea name="descricao" class="form-control"><?= $produto['descricao'] ?></textarea></td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="usado" <?= $usado ?> value="true"> Usado
</tr>
<tr>
    <td>Categoria:</td>
    <td>
        <select name="categoria_id" class="form-control">
            <?php foreach ($categorias as $categoria):
                $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                ?>
                <option value="<?= $categoria['id'] ?>" <?= $selecao ?>>
                    <?= $categoria['nome'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </td>
</tr>