<?php include 'header.php'; ?>
<?php include 'conexao.php'; ?>

	<main class="container destaque">

		<section class="busca">

			<h2>Busca</h2>

			<form action="http://google.com/search" id="form-busca">
				<input type="text" name="q" id="q">
				<input type="image" src="img/busca.png" class="lupa">
				<p id="aviso-busca">Não faça buscas em branco!</p>
			</form>	
				

		</section>

		<section class="menu-departamentos">
			<nav>
				<ul>
					<li><a href="">Departamentos</a></li>
					<li><a href="">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga Curta</a></li>
							<li><a href="#">Manga Comprida</a></li>
							<li><a href="#">Manga Social</a></li>
							<li><a href="#">Manga Casual</a></li>
						</ul>
					</li>
					<li><a href="">Calças</a></li>
					<li><a href="">Saias</a></li>
					<li><a href="">Vestidos</a></li>
					<li><a href="">Sapatos</a></li>
					<li><a href="">Bolsas e Carteiras</a></li>
					<li><a href="">Acessórios</a></li>
				</ul>
			</nav>
		</section>


		<img class="bordas" id="imagem-principal" src="img/destaque-home.png" alt="Promoção: Big City Night">




		<section class="jim-carrey">
			
			<article class="estrutura">

				<span class="btn-left"></span>

				<ol class="mbssel">
					<li>
						<img src="" alt="">
					</li>
					<li>
						<img src="" alt="">
					</li>
					<li>
						<img src="" alt="">
					</li>
					<li>
						<img src="" alt="">
					</li>
					<li>
						<img src="" alt="">
					</li>
				</ol>

				<span class="btn-right"></span>
				
			</article>

		</section>





		<section class="paineis">
			
			<article class="painel novidades bordas">
				
				<h2>Novidades</h2>
				<ol>

				<?php 
				while ($produto = mysqli_fetch_array($dados)):
				 ?>
					<li>
						<a href="produto.php?id=<?php echo $produto["id"]; ?>">
							<figure>
								<img src="img/produtos/miniatura<?php echo $produto["id"]; ?>.png" alt="<?php echo $produto["nome"]; ?>">
								<figcaption class="legenda"><p><?php echo $produto["nome"]; ?></p>
									<p><?php echo $produto["preco"]; ?></p></figcaption>
							</figure>
						</a>
					</li>	

				<?php 
					endwhile;
				 ?>													

				</ol>	

				<button type="button" class="comprar mostrar-mais">Mostrar Mais</button>			
				<button type="button" class="comprar mostrar-menos">Mostrar Menos</button>		

			</article>

			<article class="painel mais-vendidos bordas">
				<h2>Mais Vendidos</h2>
				<ol>

				<?php 
				while ($vendidos = mysqli_fetch_array($maisvendidos)):
				 ?>
					<li>
						<a href="produto.php?id=<?php echo $vendidos["id"]; ?>">
							<figure>
								<img src="img/produtos/miniatura<?php echo $vendidos["id"]; ?>.png" alt="<?php echo $vendidos["nome"]; ?>">
								<figcaption class="legenda"><p><?php echo $vendidos["nome"]; ?></p>
									<p><?php echo $vendidos["preco"]; ?></p></figcaption>
							</figure>
						</a>
					</li>	

				<?php 
					endwhile;
				 ?>													

				</ol>		
	


			</article>


		</section>
		


		
	</main>

<?php include 'footer.php'; ?>