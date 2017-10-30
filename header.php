<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pageTitle?></title>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/magicsuggest-min.css">
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="http://amakaik.cl/AsistenteTaxonomico/images/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="https://localhost:44380/Account/Register">REGISTRO</a></li> -->
<?php
session_start();
if (!isset($_SESSION['Email']) || empty($_SESSION['Email'])) {
    echo '<li><a href="login.php">INICIAR SESION</a></li>';
} else {
    echo '<li><a>'.$_SESSION['Email'].'</a></li>';
    echo '<li><a href="logout.php">CERRAR SESION</a></li>';
}
?>
                </ul>

            </div>
        </div>
    </nav>
    <div class="slide"><img src="http://amakaik.cl/AsistenteTaxonomico/images/slide.png" width="100%"></div>
    <div class="container body-content">