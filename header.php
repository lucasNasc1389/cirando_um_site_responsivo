<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Criando um site reponsivo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="css/<?php echo $style;?>.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css" />

</head>
<body>
	<? php include('includes/organisms/menu-responsivo.php') ?>

	<div class="layout">
		<header>
			<div class="container">

				<div class="logo wow fadeInDown" data-wow-duration="1s" data_wow-delay="1s">
					<a href="index.html">
						<img src="images/Logo-Lucas-Topo-01.svg" alt="Logo Topo Tag">
					</a>
				</div>
				
				<div class="links">
					<nav class="wow fadeInDown" data-wow-duration="1s" data_wow-delay="1s">
						<ul>
							<li><a href="index.php">Início</a></li>
							<li><a href="sobre.php">Sobre</a></li>
							<li><a href="portfolio.php">Portfolio</a></li>
							<li><a href="contato.php">Contato</a></li>
						</ul>
					</nav>

					<a class="toggle" href="javascript:;"><span></span>
					<span></span>
					<span></span></a>

					<ul class="social wow">
						<li><a href="#"><i class="fa fa-linkedin"></i></a>
						</li>

						<li><a href="#"><i class="fa fa-github-alt"></i></a>
						</li>
					</ul>
				</div>

				<h1><?php echo $chamada; ?></h1>
				
				<p class="wow slideInLeft" data-wow-duration="1.5s" data_wow-delay="2s">Web // Design // Code</p>

			</div>

		</header>

		<main>