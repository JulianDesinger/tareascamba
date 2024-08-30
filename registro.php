
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="images/logomuñeco.png">
</head>
<body class="bodyfondo">
    
    <form class="registrofondo" action="tareascamba.php " method="POST">
        <h1>Registrarse</h1>
        <hr>
        <i class="fa-solid fa-user"></i>
    <label>Nombres</label>
    <input type="text" name="usuario" placeholder="Nombre de Usuario">
    <i class="fa-solid fa-user"></i>
    <label>Apellidos</label>
    <input type="text" name="Apellido" placeholder="Apellido de Usuario">
    <i class="fa-solid fa-user"></i>
    <label>Numero</label>
    <input type="text" name="numero" placeholder="Numero de celular">
    <i class="fa-solid fa-unlock"></i>
    <label>Clave</label>
    <input type="password" name="Clave" placeholder="Clave">
    <hr>
    <button type="submit">Crear Cuenta</button>
    <a href="index.php" > Iniciar Sesion</a>


    </form>
</body>
</html>