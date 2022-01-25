<?php

include("./config.php");
session_start();//inicia sessao
ob_start(); // limpa buffer de saída

	if (!isset($_SESSION['login'])) {
		header('Location: ./index.php');
		die;
	}elseif(!isset($_SESSION['adm'])){
		header('Location: ./index.php');
		die;
	}
?>