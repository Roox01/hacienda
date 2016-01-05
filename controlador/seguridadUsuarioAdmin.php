<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Reanudamos la sesión 
session_start();
//Validamos si existe realmente una sesión activa o no 
if ($_SESSION["sesion"] !== "activa") {
    //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión)
    header("Location: index.php");
    exit();
}

?>