<?php include 'header.php'; ?>
<?php include 'conexao.php'; ?>

	<main class="container">

		<section class="contem-barras">

		<ol class="barra-de-metas" data-ng-controller="BarraDeMetasController">
			<li>
				{}metas.quantoVendeu{}
			</li>
			<li>
				{}metas.quantoFalta{}
			</li>
		</ol>

		<ol data-ng-controller="FuncionarioController">
			<li data-ng-repeat="funcionario in funcionarios">
				<img ng-src="{{funcionario.foto}}" alt="">
				<p>{{funcionario.vendas}}</p>
			</li>
		</ol>
			

		</section>

		
	</main>

<?php include 'footer.php'; ?>