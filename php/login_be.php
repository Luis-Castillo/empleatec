<?php
    
    session_Start();

    include 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM user where usuario='$usuario' 
    and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
        <script> 
           alert("Usuario o Contraseña no son correctos, por favor verifique los datos");
            window.location = "../log_reg/iniciar.php;
        </script>
        ';
        exit;
    }
?>