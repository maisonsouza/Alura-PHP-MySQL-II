<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 21/01/2019
 * Time: 14:58
 */

require_once ("cabecalho.php"); ?>
<form action="envia-contato.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" class="form-control"> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" class="form-control"> </td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><textarea type="textarea" name="mensagem" class="form-control"></textarea>  </td>
        </tr>
        <tr>
            <td><button  class="btn btn-primary">  Enviar  </td>
        </tr>
    </table>
</form>
<?php
require_once ("rodape.php");