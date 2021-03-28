<?php
    
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicia sesión");
                window.location = "../log_reg/iniciar.php";
            </script>
        ';
        session_destroy();
        die();
    }
     

?>

<?php
    include ('funciones/conexion_db.php');
    $id = $_GET["id"];
    $edit = "SELECT * FROM registro_empleo WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $edit);
?>

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Registrar Empleo</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    
<!--====================================================
                     MAIN NAVBAR
======================================================-->
    <header class="header">
        <nav class="navbar navbar-expand-lg ">
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Search Now" class="form-control">
                </form>
            </div>
            <div class="container-fluid ">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <div class="brand-text brand-big hidden-lg-down"><img src="../img/empleatec.png" alt="Logo" class="img-fluid" style="max-width: 200px;"></div>
                            <div class="brand-text brand-small"><img src="../img/favicon2.png" alt="Logo" class="img-fluid" style="max-width:50px;"></div>
                        </a>
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Expand-->
                    <li class="nav-item d-flex align-items-center full_scr_exp"><a class="nav-link" href="#"><img src="img/expand.png" onclick="toggleFullScreen(document.body)" class="img-fluid" alt=""></a></li>
                    
                   
                    
                    <li class="nav-item dropdown"><a id="profile" class="nav-link logout" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"></a>
                        <ul aria-labelledby="profile" class="dropdown-menu profile">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5"><?php echo $_SESSION['usuario']?></h3>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            
                            
                            <li>
                                <a rel="nofollow" href="profile.html" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-power-off"></i>Cerrar Sesion</div>
                                    </div>
                                </a> 
                            </li>
                        </ul>
                    </li>
                    
                </ul> 
            </div>
        </nav>
    </header>

<!--====================================================
                    PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">
       
        <!--***** SIDE NAVBAR *****-->
        <nav class="side-navbar">
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4"><?php echo $_SESSION['usuario']?></h1>
                </div>
            </div>
            <hr>
            <!-- Sidebar Navidation Menus-->
            <ul class="list-unstyled">
                
                <li class="active"> <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Empleos</a></li>

                <li><a href="#AoB" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-building-o"></i>Agregar | Borrar Vacantes</a>
                    <ul id="AoB" class="collapse list-unstyled">
                        <li><a href="R_empleo.php">Agregar Vacante</a></li> 
                        <li><a href="B_empleo.php">Borrar Vacante</a></li>
                         
                    </ul>
                </li>                  
                
                <li> <a href="E_empleo.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar Vacantes</a></li>

            </ul>
        </nav>

        <div class="content-inner form-cont">
            <div class="row">
                <div class="col-md-12">

                    <!--***** BASIC FORM *****-->
                    <div class="card form" id="form1">
                        <div class="card-header">
                            <h3>Registrar Empleo</h3>
                        </div>
                        <br>

                        <?php

                        while($registro = mysqli_fetch_array($resultado)){
                            $id=$registro["id"];
                            $n_empresa=$registro["nombre_empresa"];
                            $c_empresa=$registro["correo_empresa"];
                            $titulo=$registro["titulo"];
                            $sueldo=$registro["sueldo"];
                            $pago=$registro["pago"];
                            $n_contacto=$registro["numero_contacto"];
                            $vacantes=$registro["vacantes"];
                            $descripcion1=$registro["descripcion1"];
                            $descripcion2=$registro["descripcion2"];
                        ?>


                        <form action="funciones/editarE.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="nameempresa">Nombre de la Empresa:</label>
                                        <input type="text" class="form-control" id="nameempresa" aria-describedby="title" placeholder="Empleatec" name="nuevo_nombre_empresa" value="<?php  echo $n_empresa  ?>">
                                        <small id="nameempresa" class="form-text text-muted">Esto a parecera en la publicación.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo de la Empresa:</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="title" placeholder="Contacto@empleatec.com" name="nuevo_correo_empresa" value="<?php  echo $c_empresa  ?>">
                                        <small id="email" class="form-text text-muted">Esto a parecera en la publicación.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampletitle">Titulo del anuncio:</label>
                                        <input type="text" class="form-control" id="exampletitle" aria-describedby="title" placeholder="Se necesita trabajador para..." name="nuevo_titulo_anuncio" value="<?php  echo $titulo  ?>">
                                        <small id="emailHelp" class="form-text text-muted">Este titulo se mostrara en la publicación.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="pago">Sueldo Propuesto:</label>
                                        <input type="number" class="form-control" id="sueldo" placeholder="$20,000 MX" name="nuevo_sueldo" value="<?php  echo $sueldo  ?>">
                                        <small id="sueldo" class="form-text text-muted">Defina con que divisa pagara o ponga "Sueldo seguna aptitudes" o "a tratar".</small>
                                    </div>  

                                    <div class="form-group">
                                        <label for="formadepago">Tipo de pago:</label>
                                        <input type="text" class="form-control" id="formadepago" placeholder="Mensualmente - Quincenal - Comisiones, Etc." name="nuevo_pago" value="<?php  echo $pago  ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="contactophone">Numero de Contacto:</label>
                                        <input type="number" class="form-control" id="contactophone" placeholder="9921324365" name="nuevo_numero_contacto" value="<?php  echo $n_contacto  ?>">
                                        
                                    </div>
                                        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vacantes">Vacantes disponibles</label>
                                        <input type="number" class="form-control" id="vacantes" placeholder="2..." name="nuevo_vacantes" value="<?php  echo $vacantes  ?>">
                                        <small id="emailHelp" class="form-text text-muted">Cuantas vacantes estan libres</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea">Descripción 1</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="nuevo_description1" > <?php  echo $descripcion1  ?> </textarea>
                                        <small id="emailHelp" class="form-text text-muted">Esta descripción aparecera en la previsualizacion. Se recomienda un texto corto.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleTextarea">Descripción 2</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="nuevo_description2"> <?php  echo $descripcion2  ?></textarea>
                                        <small id="emailHelp" class="form-text text-muted">Esta descripción aparecera cuando ingresen a la publicación.</small>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imagen de referencia</label>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                        <small id="fileHelp" class="form-text text-muted">Esta aparecera en la previsualizacion y en la publicación.</small>
                                    </div>
                                 </div>
                            </div> 
                            <button type="submit" class="btn btn-general btn-blue mr-2" value="<?php echo $id ?>">Agregar</button>  
                            <button type="reset" class="btn btn-general btn-white">Cancelar</button>
                        </form>
                        <?php } ?>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!--Global Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/chart.min.js"></script> 
    <script src="js/front.js"></script> 
    
    <!--Core Javascript -->
    <script>
        new Chart(document.getElementById("myChart-nav").getContext('2d'), {
          type: 'doughnut',
          data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
              backgroundColor: [
                "#2ecc71",
                "#3498db",
                "#95a5a6",
                "#9b59b6",
                "#f1c40f",
                "#e74c3c",
                "#34495e"
              ],
              data: [12, 19, 3, 17, 28, 24, 7]
            }]
          },
          options: {
              legend: { display: false },
              title: {
                display: true,
                text: ''
               } 
            }
        });
    </script>
</body>

</html>