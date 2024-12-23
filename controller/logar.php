<?php
require_once('../config/connection.php');
require_once('../model/usuarioModel.php');


//entrada
$json = file_get_contents('php://input');
$reqbody = json_decode($json);
$loginController = $reqbody ->emailView;
$senhaController = $reqbody ->senhaView;

//processamento
$conexao = new Connection();
$banco = $conexao->abrirConexao();
$usuarioModel = new usuarioModel($banco);
$usuarioModel->emailModel = $loginController;
$usuarioModel->senhaModel = $senhaController;
$retorno = $usuarioModel->Logar();

//saída
echo json_encode($retorno);
?>