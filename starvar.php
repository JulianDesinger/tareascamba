<?php
session_start();
$_SESSION['id_user']= "X";
$_SESSION['nm_user']= "X";
$_SESSION['er_tittle']= "Ups!!  Ha ocurrido un error!!";
$_SESSION['id_access']= "Error 41: acceso a servidor no autorizado";
$_SESSION['er_user']= "Base de datos o servidor no autenticado";
header('location:registro.php');