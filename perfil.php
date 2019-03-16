<?php
	session_start();
	if (!isset($_SESSION['access_token'])) {
		header('Location: g-callback.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

</head>

<body>
    <nav class="white " role="navigation">
        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
                <li>
                    <a   href="index.php">
                        <i class="large material-icons left">person</i>Usuario</a>
                </li>
                <li>
                    <a>
                        <i class="large material-icons left">group</i>Ver reuniones
                    </a>
                </li>
                <li>
                    <a>
                        <i class="large material-icons left">view_agenda</i>Ingresar disponibilidad</a>
                </li>
                          
                <li><a href="logout.php"><i class="large material-icons left">exit_to_app</i>Salir</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li>
                    <a href="index.php" >
                        <i class="large material-icons left">person</i>Usuario</a>
                </li>
                <li>
                    <a>
                        <i class="large material-icons left">group</i>Ver Reunión
                    </a>
                </li>
                <li>
                    <a>
                        <i class="large material-icons left">view_agenda</i>Disponibilidad</a>
                </li>
                <li>
                    <a>
                        <i class="large material-icons left">insert_chart</i>Estadisticas</a>
                </li>
                
                <li><a href="logout.php"><i class="large material-icons left">exit_to_app</i>Salir</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
  
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>