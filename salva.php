<?php
	include "pessoa.php";

	$menino = new Pessoa($_POST['nome'],$_POST['idade']);

	echo $menino->getNome();
	echo '<br>';
	echo $menino->getIdade();
?>