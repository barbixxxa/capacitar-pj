<?php
include "config.php";
?>
<?php
	$usuario = $_POST['usuario'];
	$entrar = $_POST['entrar'];
	$senha = $_POST['senha'];
	$connect = mysql_connect(HOST,USER,PASS);
	$db = mysql_select_db(BASE);
		if (isset($entrar)) {
			$verifica = mysql_query("SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha' ") or die("Error");
			if (mysql_num_rows($verifica)<=0) {
				echo "<script language = 'javascript' type='text/javascript'>
				alert('Login e/ou senha incorretos');widow.location.href='login.php';</script> ";
				die();
			}else{
				$_SESSION['logado'] = TRUE;
				setcookie("usuario",$usuario);
				header("Location:../theeam/index.php");
			}
		}

?>
