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
			
			<button class="btn btn-info" data-toggle="modal" data-target="#janela">Abrir Modal</button>
			
			<div class="modal" role="dialog" id="janela">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Título do meu Modal</h4>
						</div>
						<div class="modal-body">
							<p>Conteúdo do meu modal</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal">Fechar</button>
						</div>
					</div>
				</div>
			</div>
									
		</div>
	</body>
</html>
