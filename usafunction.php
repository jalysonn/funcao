<form method="post" action="usafunction.php">
	Digite seu nome:<input type="text" name="nome"><br>
	Digite seu endereço:<input type="text" name="endereco"><br>
	<input type="submit" value="Enviar"/>

</form>

<?php 
	require('function.php');	
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];

	html($nome,$endereco);
	calcfatorial();
	

?>