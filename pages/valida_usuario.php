<?php
session_start();

require_once('conexao_banco.php');

$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "SELECT id, usuario, email, servico, arquivo FROM usuarios where email = '$email' AND senha ='$senha' ";

$objDB = new db();
$link = $objDB -> connect_mysql();

$resultado_id = mysqli_query($link, $sql); 

if ($resultado_id) {
	$dados_usuario = mysqli_fetch_array($resultado_id);

	if (isset($dados_usuario['usuario'])){

		$_SESSION['id_usuario'] = $dados_usuario['id'];
		$_SESSION['usuario'] = $dados_usuario['usuario'];
		$_SESSION['email'] = $dados_usuario['email'];
		$_SESSION['servico'] = $dados_usuario['servico'];
		
		header('location: home.php');
	}else{
		header('location: login.php?erro=1');
		}
	}
	else{
		echo "erro na execucao.";
	}
?>