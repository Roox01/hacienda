<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$consulta = $_POST['codigoVaca'];
$_SESSION['vaca'] = $_POST['codigoVaca'];
$opcion = $_POST['opcion'];

if ($opcion == 'consulta' && $consulta != '') {
    $_SESSION['vaca'] = $_POST['codigoVaca'];
    header('Location: ../vista_animales.php');
} else if ($opcion == 'reproduccion' && $consulta != '') {  
    $_SESSION['vaca'] = $_POST['codigoVaca'];
    header('Location: ../vista_reproduccion.php');
} else {
    header('Location: ../vista_usuario_1.php');
}

