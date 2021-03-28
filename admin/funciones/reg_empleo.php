<?php

    include 'conexion_db.php';

    $nombre_empresa=$_POST['nombre_empresa'];
    $correo_empresa=$_POST['correo_empresa'];
    $titulo_anuncio=$_POST['titulo_anuncio'];
    $sueldo=$_POST['sueldo'];
    $pago=$_POST['pago'];
    $numero_contacto=$_POST['numero_contacto'];
    $vacantes=$_POST['vacantes'];
    $descripcion1=$_POST['description1'];
    $descripcion2=$_POST['description2'];

    $registro_empleo = "INSERT INTO registro_empleo (nombre_empresa, correo_empresa, titulo, sueldo, pago, numero_contacto, vacantes, descripcion1, descripcion2) VALUES ('$nombre_empresa', '$correo_empresa', '$titulo_anuncio', '$sueldo', '$pago', '$numero_contacto', '$vacantes', '$descripcion1', '$descripcion2')";

    $ejecutar = mysqli_query($conexion, $registro_empleo);

    if($ejecutar){
        echo '
        <script>
            alert("usuario almacedado correctamente");
            window.location="../index.php";
        </script>        
        ';
    }else{
        echo '
        <script>
            alert("intentalo de nuevo");
            window.location="../index.php";
        </script>        
        ';
    }
    
?>