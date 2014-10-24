<?php 

	//$conexao			= mysqli_connect("localhost", "net", "internet", "WD43");
	$conexao			= mysqli_connect("127.0.0.1", "root", "", "WD43");
	$dados				= mysqli_query($conexao, "SELECT * FROM produtos ORDER BY nome ASC LIMIT 0, 12");
	$maisvendidos		= mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");

 ?>