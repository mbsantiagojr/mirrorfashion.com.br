<?php //include 'header.php'; ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="css/bootstrap.css">
			<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="css/extras.css">
			</head>
			<style>
				.form-control:invalid:focus {
				border: 1px solid #cc0000;
					}
				.navbar {
					margin: 0;
				}
				body {
					padding-top: 50px;
				}
			</style>
			<body>
				<nav class="navbar navbar-default navbar-fixed-top fundo-extras">
					<div class="navbar-header">
						<a href="" class="navbar-brand fundo-extras">Mirror Fashion</a>
						<button class="navbar-toggle glyphicon glyphicon-align-justify fundo-extras" data-target=".navbar-collapse" data-toggle="collapse"></button>
					</div>
					<ul class="nav navbar-nav collapse navbar-collapse navbar-extras">
						<li><a href="">Sobre</a></li>
						<li><a href="">Ajuda</a></li>
						<li><a href="">Perguntas Frequentes</a></li>
						<li><a href="">Entre em Contato</a></li>
					</ul>
				</nav>
				<div class="jumbotron jumbotron-extras">
					<h2 class="h1-extras">Ótima escolha!</h2>
					<p>Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.</p>
				</div>
				<div class="container container-extras">
					<div class="row row-extras">
						
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading menu-departamentos">
									<h2>Sua Compra</h2>
								</div>
								<div class="panel-body menu-departamentos">
									<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" alt="" class="img-thumbnail img-responsive">
									<dl class="dl-horizontal">
										<dt>Produto:</dt>
										<dd><?= $_POST["nome"] ?></dd>
										<dt>Cor:</dt>
										<dd><?= $_POST["cor"] ?></dd>
										<dt>Tamanho:</dt>
										<dd><?= $_POST["tamanho"] ?></dd>
										<dt>Preço:</dt>
										<dd><?= $_POST["preco"] ?></dd>
									</dl>
									
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<form action="#">
								<fieldset>
									<legend>Dados Pessoais</legend>
									<div class="form-group">
										<label for="nome">Nome:</label>
										<input type="text" name="nome" id="nome" value="" class="form-control" autofocus required>
									</div>
									<div class="form-group">
										<label for="email">E-Mail:</label>
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="email" name="email" id="email" value="" class="form-control" placeholder="Ex: nome@site.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
										</div>
									</div>
									<div class="form-group">
										<label for="cpf">CPF:</label>
										<input type="text" name="cpf" id="cpf" value="" class="form-control" placeholder="999.999.999-99" data-mask="999.999.999-99" required>
									</div>
									<div class="checkbox">
										<label for="">
											<input type="checkbox" value="Sim" name="spam" checked>
											Quero receber SPAM da Mirror Fashion
										</label>
									</div>
								</fieldset>
								<fieldset>
									<legend>Cartão de Crédito</legend>
									<div class="form-group">
										<label for="numero-cartao">Número - CVV</label>
										<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
									</div>
									<div class="form-group">
										<label for="bandeira-cartao">Bandeira</label>
										<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
											<option value="AMEX">American Express</option>
											<option value="VISA">VISA</option>
											<option value="MAST">MasterCard</option>
										</select>
									</div>
									<div class="form-group">
										<label for="validade-cartao">Validade</label>
										<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
									</div>
								</fieldset>
								<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Confirmar Pedido</button>
							</form>
						</div>
						
					</div>
					
				</div>
				<?php //include 'footer.php'; ?>
				<script>
					document.querySelector('input[type=email]').oninvalid = function () {
						this.setCustomValidity("");
						if (!this.validity.valid) {
							thi.setCustomValidity(":: E-Mail Inválido!");
						}
					}
				</script>
				<script src="js/jquery.js"></script>
				<script src="js/bootstrap.js"></script>
				<script src="js/inputmask-plugin.js"></script>

			</body>
		</html>