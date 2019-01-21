<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/11/2018
 * Time: 11:28
 */
?>
<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
?>
    <table class="table table-striped table-bordered">
        <?php
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto) :
            ?>
            <tr>
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['preco'] ?></td>
                <td><?= substr($produto['descricao'], 0, 40) ?></td>
                <td><?= $produto['categoria_nome'] ?></td>
                <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">Alterar</a>
                </td>
                <td>
                    <form action="remove-produto.php" method="post">
                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                        <button class="btn btn-danger"/>
                        Remover</a>
                    </form>
                </td>

            </tr>
        <?php
        endforeach;
        ?>
    </table>
<?php
include("rodape.php");