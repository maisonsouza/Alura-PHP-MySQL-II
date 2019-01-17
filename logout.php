<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 17/01/2019
 * Time: 12:10
 */
include ("logica-usuario.php");
logout();
header("Location: index.php?logout=true");