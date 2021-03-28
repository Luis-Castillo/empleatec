<?php

    include 'conexion.php';

    $usuario = $_POST ['usuario'];
    $correo = $_POST ['correo'];
    $contrasena = $_POST ['contrasena'];


    $query = "INSERT INTO user(usuario, correo, contrasena) VALUES('$usuario', '$correo', '$contrasena')";

    
//verificar que el correo no se repita
$verificar_correo = mysqli_query($conexion, "SELECT * FROM user WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
        <script>
            alert("Este correo ya existe, intente con otro");
            window.location="../log_reg/registro.php";
        </script>
 ';
 exit();
}

//verificar que el usuario no se repita
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM user WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya existe, intente con otro");
            window.location="../log_reg/registro.php";
        </script>
 ';
 exit();
}

$ejecutar = mysqli_query($conexion, $query);


if($ejecutar){
    echo '
    <script>
        alert("usuario almacedado correctamente");
        window.location="../log_reg/iniciar.php";
    </script>        
    ';
}else{
    echo '
    <script>
        alert("intentalo de nuevo");
        window.location="../log_reg/registro.php"";
    </script>        
    ';
}

mysqli_close($conexion);

?>
