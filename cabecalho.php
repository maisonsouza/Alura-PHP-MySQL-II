<?php
/**
 * Created by PhpStorm.
 * User: maiso
 * Date: 18/11/2018
 * Time: 20:27
 */
?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/loja.css"/>
</head>
<body>
<header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Minha Loja</a>
        </div>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="produto-formulario.php">Adiciona Produto</a></li>
                <li class="nav-item"><a class="nav-link" href="produto-lista.php">Lista produtos</a></li>
                <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="container">
    <div class="principal">
<?php  mostraAlerta("success"); ?>
<?php mostraAlerta("danger"); ?>