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
	<header class="jumbotron bg-light" style="margin-bottom:0;">
		<h1>Resultado Rápido</h1>
		<p>Sistema de Apoio as Avaliações Escolares</p>
	</header>
	<!-- Barra de Menus -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Início</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Resultado</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Gabarito</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Administrador</a>
			</li>
		</ul>
	</nav>
	<section class="jumbotron bg-light">
		<h4>Lançamento de Marcações</h4>
		<form action="" style="margin-top:20px">
			<div class="form-group">
				<label for="matricula">Digite sua <strong>Matrícula</strong></label>
				<input type="text" class="form-control" id="matricula"/>
			</div>
			<div class="form-group">	
				<label for="nome">Confira seu <strong>Nome</strong></label>
				<input type="text" class="form-control" id="nome" readonly/>
			</div>
			<div class="form-group">	
				<label for="data_nascimento">Confira sua <strong>Data de Nascimento</strong></label>
				<input type="date" class="form-control" id="data_nascimento" readonly/>
			</div>
			<div class="form-group">
  				<label for="turma">Confira sua <strong>Turma</strong></label>
  				<input type="text" class="form-control" id="turma" readonly/>
			</div>
			<div class="form-group">
  				<label for="bimestre">Confira o <strong>Bimestre</strong></label>
  				<input type="text" class="form-control" id="bimestre" readonly/>
			</div>
			<div class="form-group">
  				<label for="dia_prova">Selecione o <strong>Dia</strong></label>
  				<select class="form-control" id="dia_prova">
    				<option>1º Dia</option>
    				<option>2º Dia</option>
    				<option>3º Dia</option>
    				<option>4º Dia</option>
  				</select>
			</div>
		</form>
	</section>
</body>
</html>