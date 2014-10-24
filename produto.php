<?php include 'header.php'; ?>
<?php include 'conexao.php'; ?>

<?php 
	$buscaproduto = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]"); 
?>


<main class="container">

<?php 
while ($vendidos = mysqli_fetch_array($buscaproduto)):
 ?>

<section class="produto">

	
	<h3>Nome: <?php echo $vendidos["nome"]; ?></h3>
	<small>por apenas <strong><?php echo $vendidos["preco"]; ?></strong></small>
	<form action="checkout.php" method="POST">
		<fieldset class="cores">
			<legend>Escolha a cor:</legend>
			<input type="radio" name="cor" value="verde" id="verde" checked>
			<label for="verde"><img src="img/produtos/foto<?php echo $vendidos["id"]; ?>-verde.png" alt="verde"></label>
			<input type="radio" name="cor" value="rosa" id="rosa" >
			<label for="rosa"><img src="img/produtos/foto<?php echo $vendidos["id"]; ?>-rosa.png" alt="rosa"></label>
			<input type="radio" name="cor" value="azul" id="azul" >
			<label for="azul"><img src="img/produtos/foto<?php echo $vendidos["id"]; ?>-azul.png" alt="azul"></label>
		</fieldset>

		<input type="hidden" name="nome" value="<?php echo $vendidos["nome"]; ?>">
		<input type="hidden" name="id" value="<?php echo $vendidos["id"]; ?>">
		<input type="hidden" name="preco" value="<?php echo $vendidos["preco"]; ?>">

		<fieldset class="tamanhos">
			<legend>Escolha o tamanho:</legend>
			<input name="tamanho" type="range" min="36" max="46" value="42" step="2">
			<output for="tamanho" name="valortamanho">42</output>
		</fieldset>
		<input type="submit" class="comprar" value="Comprar">
	</form>
</section>

<section class="detalhes">
	<h2>Detalhes do produto</h2>
	<p>
		<?php echo $vendidos["descricao"]; ?>
	</p>

	<table>
		<thead>
			<tr>
				<th>Característica</th>
				<th>Detalhe</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Modelo</td>
				<td>Cardigã 7845</td>
			</tr>
			<tr>
				<td>Material</td>
				<td>Algodão e poliester</td>
			</tr>
			<tr>
				<td>Cores</td>
				<td>Azul, Rosa e Verde</td>
			</tr>
			<tr>
				<td>Lavagem</td>
				<td>Lavar a mão</td>
			</tr>
		</tbody>
	</table>



</section>

<?php 
	endwhile;
 ?>		

</main>
<?php include 'footer.php'; ?>