<!Doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h1>Meu primeiro <small>sistema bootstrap</small></h1>
			<p>Este é o meu primeiro teste</p>
			
			<hr/>
			
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand " href="">Minha Empresa.com</a>
					</div>
					<ul class="nav navbar-nav ">
						<li><a href="">Home</a></li>
						<li class="dropdown">
							<a href="" class="dropdown-toogle" data-toggle="dropdown" >Empresa <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Estrutura</a></li>
								<li><a href="">Cultura</a></li>
								<li><a href="">Carreira</a></li>
							</ul>
						</li>
						<li><a href="">Contato</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="">Login</a></li>
						<li><a href="">Sair</a></li>
					</ul>
				</div>
			</nav>
						
		</div>
	</body>
</html>
