<?php
$email = $_POST['email'];   
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$curso = $_POST['curso'];
$button = $_POST['button'];

	if (isset($button)) {
		echo nl2br("E-mail: $email\nNome: $nome\nSexo: $sexo\nCurso: $curso");
		echo nl2br("\n\n\nConfirmar?\n<a href=\"confirma.php\">Sim<a/>	<a href=\"cancela.php\">Não<a/>");

	}
?>
