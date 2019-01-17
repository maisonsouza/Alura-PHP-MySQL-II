<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 17/01/2019
 * Time: 10:30
 */

function usuarioEstaLogado(){
    return isset($_COOKIE["usuario_logado"]);
}

function usuarioLogado(){
    return $_COOKIE["usuario_logado"];
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
        header("Location:index.php?falhaDeSeguranca=true");
        die();
    }
}

function logaUsuario($email){
    setcookie("usuario_logado",$email);
}

