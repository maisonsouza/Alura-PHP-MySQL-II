<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 17/01/2019
 * Time: 16:17
 */
?>
<?php
session_start();
function mostraAlerta($tipo)
{
    if (isset($_SESSION[$tipo])) {
        ?>
        <p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo] ?></p>
        <?php
        unset($_SESSION[$tipo]);
    }
}