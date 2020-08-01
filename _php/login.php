 <?php
	session_start();
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$senha = sha1($senha);
	
	require_once("../conexao.php");	
	
	$query = "SELECT * FROM `tb_cliente` WHERE `nm_email_cliente` = '$login' AND `nm_senha_cliente` = '$senha'";

	$result = mysqli_query($con, $query);

	while ($inf = mysqli_fetch_array($result)) {
		$nome = $inf["nm_cliente"];
	}
	
	if(mysqli_affected_rows($con))
	{		
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $nome;
		header('location:../index.php');
	}
	else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:../logar.php');
	}
?>