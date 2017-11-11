<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Achados e perdidos UDF</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php?page=home.php">
    <img src="imagens/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
    Achados e Perdidos UDF
  </a>
  <a class="navbar-brand" href="index.php?page=home"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
</nav>

<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
					
						include("config.php");
						
						switch(@$_REQUEST["page"]){
							case "achados":
								include("achados.php");
							break;
							case "perdidos":
								include("perdidos.php");
							break;
							case "info":
								include("cadastro.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>
			</div>
		</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>