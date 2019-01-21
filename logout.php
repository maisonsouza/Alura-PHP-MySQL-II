<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 17/01/2019
 * Time: 12:10
 */
require_once ("logica-usuario.php");

logout();
$_SESSION['success']="Deslogado com sucesso";
header("Location: index.php");
die();