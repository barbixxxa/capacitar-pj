<?php
	include "config.php";
?>
<?php
	$login_COOKIE = $_COOKIE['usuario'];
		if(isset($login_COOKIE)){
			echo "Bem Vindo, $login_COOKIE";
					echo "Essas informações podem ser acessadas por você";
		
?>
<?php
	}else{
					echo "Não pode acessar";
					echo "<a href=\"login.html\">\n\nFaça login<a/>";
				}
?>
