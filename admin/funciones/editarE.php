<?php
    include ('conexion_db.php');
    

    $id=$_POST["id"];
    $n_empresa=$_POST["nuevo_nombre_empresa"];
    $c_empresa=$_POST["nuevo_correo_empresa"];
    $titulo=$_POST["nuevo_titulo"];
    $sueldo=$_POST["nuevo_sueldo"];
    $pago=$_POST["nuevo_pago"];
    $n_contacto=$_POST["nuevo_numero_contacto"];
    $vacantes=$_POST["nuevo_vacantes"];
    $descripcion1=$_POST["nuevo_descripcion1"];
    $descripcion2=$_POST["nuevo_descripcion2"];





    //modificar
    $modificar = "UPDATE registro_empleo SET nombre_empresa='$n_empresa', correo_empresa='$c_empresa', titulo='$titulo', sueldo='$sueldo', pago='$pago', numero_contacto='$n_contacto', vacantes='$vacantes', descripcion1='$descripcion1', descripcion2='$descripcion2' WHERE id = '$id'";


    $resultado = mysqli_query($conexion, $modificar);

    if ($resultado) {
        echo "<script>
        alert('Se actualizo'); 
        window.location='../E_empleo.php';
        </script>";
    }else {
        echo "<script>
        alert('No se actualizo'); 
        window.history.go(-1);
        </script>";
    }
?>