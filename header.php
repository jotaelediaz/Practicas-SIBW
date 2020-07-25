<!DOCTYPE html>
<html>
<head>
<title>Hotel Plaza Nueva</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="estilos.css"/>
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

</head>

<body>

<?php include("funciones.php"); ?>

<div id="topbar">
        <div class="fullwrapper">
            
            <a href="index.php">
                <div id="logo" alt="Hotel Plaza Nueva - Granada" class="cf"><img src="img/logo.png"></div>
            </a>
            
            <div id="menu">
                <?php include("menu.php"); ?>
                <ul>
                  <?php print_nav($array_menu); ?>
                </ul>
                 ?>
            </div>
        </div>
</div>