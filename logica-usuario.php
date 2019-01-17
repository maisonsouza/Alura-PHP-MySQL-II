<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 17/01/2019
 * Time: 10:30
 */
session_start();
function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
    $_SESSION["danger"]="Você não tem acesso a essa funcionalidade";
        header("Location:index.php?falhaDeSeguranca=true");
        die();
    }
}

function logaUsuario($email){
    $_SESSION["usuario_logado"]=$email;
}

function logout(){
    session_destroy();
    session_start();
}

