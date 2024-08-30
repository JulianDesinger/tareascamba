<?php
header('location:starvar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="IniciarSesion.php " method="POST">
        <h1>INICIAR SESION</h1>
        <hr>
        <i class="fa-solid fa-user"></i>
    <label>Usuario</label>
    <input type="text" name="usuario" placeholder="Nombre de Usuario">
    <i class="fa-solid fa-unlock"></i>
    <label>Clave</label>
    <input type="text" name="Clave" placeholder="Clave">
    <hr>
    <button type="submit">Inicio de sesion</button>
    <a href="CrearCuenta"> Crear Cuenta</a>


    </form>
</body>
</html>