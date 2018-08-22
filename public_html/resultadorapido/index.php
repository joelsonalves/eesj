<?php
	session_start(); // Inicializa.
	session_unset(); // Remove todas as variáveis.
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado Rápido</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inicial-scale=1">
	<link rel="stylesheet" href="../complementos/bootstrap/4.1.0/dist/css/bootstrap.css">
	<script src="../complementos/jquery/3.3.1/jquery.js"></script>
	<script src="../complementos/popper/1.14.3/popper.js"></script>
	<script src="../complementos/bootstrap/4.1.0/dist/js/bootstrap.js"></script>
</head>
<body>
	<!-- Cabeçalho -->
	<header class="jumbotron bg-light" style="margin-bottom:0; padding: 20pt;">
		<div class="row col-sm-12">
		<div style="padding-right: 20pt;">
			<img class="img-fluid img-thumbnail" src="../complementos/img/brasao_pe.png" alt="Brasão de Pernambuco" style="width: 100pt; height: auto;">
		</div>
		<div style="padding-top: 20pt;">
			<h1>Resultado Rápido</h1>
			<p>Sistema de Apoio das Avaliações Bimestrais da EESJ</p>
		</div>
		</div>
	</header>
	<!-- Barra de Menus -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="/resultadorapido">Início</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./estudante.html">Estudante</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./docente.html">Docente</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./admin.html">Administração</a>
			</li>
		</ul>
	</nav>
	<section class="jumbotron bg-light" style="padding: 0; margin: 0; border: 0;">
		<div id="slideshow" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="estudante" data-slide-to="0" class="active"></li>
				<li data-target="docente" data-slide-to="1"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="../complementos/img/banner_estudante.png" alt="Estudante" width="100%" height="auto">
					<div class="carousel-caption bg-dark" style="padding: 10pt; opacity: 0.9;">
						<h3><strong>Estudante</strong>,</h3>
						<p>Esse sistema lhe permitirá lançar suas marcações no <strong>cartão-resposta</strong> virtual e, conhecer seu desempenho na <strong>avaliação</strong> realizada.</p>
					</div> 
				</div>
				<div class="carousel-item">
					<img src="../complementos/img/banner_docente.png" alt="Docente" width="100%" height="auto">
					<div class="carousel-caption bg-dark" style="padding: 10pt; opacity: 0.9">
						<h3><strong>Docente</strong>,</h3>
						<p>Esse sistema lhe permitirá definir o <strong>gabarito</strong>, autorizar o lançamento do  <strong>cartão-resposta</strong> pelo estudante e, conhecer o desempenho da turma na <strong>avaliação</strong> em curso.</p>
					</div>   
				</div>
			</div>
		</div>
	</section>
</body>
</html>