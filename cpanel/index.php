<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ludos Club</title>
 
	<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="apple-mobile-web-app-title" content="Ludos Club">
	<meta name="application-name" content="Ludos Club">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <?php include("login.php");?>
</head>
<body onload="jsfunction('home.php')">
	<div class="full_height">
	  <!-- TOP BAR & SIDE BAR-->
	  <nav class="customblack" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="" class="brand-logo"><img src="../img/iconcpanel.png" height=128></a>
		  <ul class="right hide-on-med-and-down">
			<li><a href="#" onclick="jsfunction('home.php')">Cpanel_Home</a></li>		
			<li><a href="login.php?logout">Logout</a></li>		
			<li><a href="..">Torna al sito</a></li>		
		  </ul>

		  <ul id="nav-mobile" class="side-nav">
			<li><a href="#" onclick="jsfunction('home.php')">Cpanel_Home</a></li>
			<li><a href="login.php?logout">Logout</a></li>	
			<li><a href="..">Torna al sito</a></li>		
		  </ul>
		  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	  </nav>

  <div id="content"></div>
 
  <!-- FOOTER -->
  <footer class="page-footer customblack">
    <div class="container">
		
    </div>
    <div class="footer-copyright">
      <div class="container">
		© 2017 LUDOS LIBRA ALL RIGHTS RESERVED
		<br>
		Designer: Giacomo Guaresi
      </div>
    </div>
  </footer>

	
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/init.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXaYDl-IZVZXnLkUyCNalJnhUutJaaSgM"></script>
  <script src="./js/functionpool.js"></script>
  </body>
</html>
