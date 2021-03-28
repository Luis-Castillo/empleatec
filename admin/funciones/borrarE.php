<?php
    include ('conexion_db.php');
    $id = $_GET["id"];

    $borrar = "DELETE FROM registro_empleo WHERE id='$id'";

    $resultado = mysqli_query($conexion, $borrar);

    if ($resultado) {
        header("location: ../B_empleo.php");
    }else{
        echo "<script>
        alert('No se pudo eliminar'); 
        window.history.go(-1);
        </script>";
    }
?>