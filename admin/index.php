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

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Empleos</title>
    <link rel="shortcut icon" href="img/favicon3.png">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/ui-elements/card.css">
    <link rel="stylesheet" href="css/style.css">
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
                            <div class="brand-text brand-big hidden-lg-down"><img src="../img/empleatec2.png" alt="Logo" class="img-fluid" style="max-width: 130px;"></div>
                            <div class="brand-text brand-small"><img src="img/favicon3.png" alt="Logo" class="img-fluid" style="max-width:50px;"></div>
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
                                <a rel="nofollow" href="../php/cerrar_conexion.php" class="dropdown-item">
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

                    


        <div class="content-inner">
        <br class="mb-5">

            <div class="row mt-2" id="card-1">

                    <?php
						include('funciones/conexion_db.php');

						$consulta_mysqli = "SELECT * FROM registro_empleo";
						$resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

						while($registro = mysqli_fetch_array($resultado_consulta_mysqli)){
							$id= $registro['id'];
                            $titulo=$registro["titulo"];
                            $descripcion1=$registro["descripcion1"];							
	            	?>

                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="card card-inverse card-info">
                        <img class="card-img-top" src="img/card/c-1.jpg">
                        <div class="card-block"> 
                            <h4 class="card-title"><?php echo $titulo?></h4>
                             <p><?php echo $descripcion1?> </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info float-right btn-sm">Ver Vacante</button>
                        </div>
                    </div>
                </div>

                <?php  }?>       
                
                
            </div>

            <!--***** FOOTER *****-->    
            <div class="row" id="report4">
                <div class="col-md-3">
                    <div class="card text-center social-bottom sb-fb">
                        <i class="fa fa-facebook"></i>
                        <div>3250 +</div>
                        <p>Likes</p>
                    </div>
                </div>
                
                
                <div class="col-md-3">
                    <div class="card text-center social-bottom sb-in">
                        <i class="fa fa-instagram"></i>
                        <div>4524 +</div>
                        <p>Likes</p>
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
    <script src="js/mychart.js"></script>
</body>

</html>