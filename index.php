<?php
/**
 * Created by PhpStorm.
 * User: maison
 * Date: 17/11/2018
 * Time: 19:38
 */
include("cabecalho.php"); ?>

<?php if (isset($_GET['login']) && $_GET['login'] == true) { ?>
    <p class="alert-success">Logado com sucesso </p>
<?php } ?>

<?php if (isset($_GET['login']) && $_GET['login'] == false) { ?>
    <p class="alert-danger">Usuário ou senha inválida </p>
<?php } ?>




<h1>Seja bem vindo</h1>
<?php $nome = "Maison" ?>
Loja do <?php echo $nome; ?>
<?php if (isset($_COOKIE["usuario_logado"])) { ?>
    <p class="text-success">Você está logado como <?= $_COOKIE["usuario_logado"] ?></p>
<?php } else { ?>
<h2>Login</h2>
<form action="login.php" method="post">
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="password" name="senha" class="form-control"></td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-primary">Login</button>
            </td>
        </tr>

    </table>
</form>
<?php } ?>
<?php include("rodape.php");?>
