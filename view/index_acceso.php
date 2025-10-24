<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel='stylesheet' href='../css/estilos_abmphp.css'>
    
</head>
<body>
    <section class='sec_login'>
        <h3>Acceso al sistema</h3>
        <form method="post" action="funciones/validar_acceso.php">
            <label for="usuario">USUARIO</label>
            <div class='div_form'><input type="text" name="usuario" required maxlength="10" minlength="3"/></div>
            <label for="clave">CLAVE</label>
            <div class='div_form'><input type="password" name="clave" required maxlength="30" minlength="8"/></div>
            <div><input type="submit" value="Acceso"></div> 
        </form>
    </section>    
</body>
</html>