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


<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Bootstrap Admin Template </title>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
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

        <div class="content-inner chart-cont">
            

            <!--***** CONTENT *****-->     
            <div class="row">
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th>#</th>
                      <th>Titulo anuncio</th>
                      <th>Nombre de Empresa</th>
                      <th>Correo Empresa</th>
                      <th>Accion</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php
            
            include ('funciones/conexion_db.php');

            $consulta_mysqli = "SELECT * FROM registro_empleo";
            $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

            while($registro = mysqli_fetch_array($resultado_consulta_mysqli)){
                $id = $registro["id"];
                $titulo=$registro["titulo"];
                $nombre_empresa=$registro["nombre_empresa"];
                $correo=$registro["correo_empresa"];
                
            ?>
                   
                    <tr class="table">
                      <th scope="row"><?php echo $id ?></th>
                      <td><?php echo $titulo?></td>
                      <td><?php echo $nombre_empresa?></td>
                      <td><?php echo $correo?></td>
                      <td><a href="edit_empleo.php?id=<?php echo $id?>" class="btn btn-danger borrar"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                    </tr>

                  </tbody>
                  <?php }?>
                </table>
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