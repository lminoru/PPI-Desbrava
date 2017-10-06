<?php

//inicia sessão
session_start();

require_once 'biblioteca/cabecalho.inc';
require_once 'classes/usuario.class.php';
require_once 'classes/conexao.class.php';

 // receber os dados que vieram do formulário (index.php)
 $logForm = $_POST['login'];
 $senhaForm = $_POST['senha'];
 $botao = $_POST['btn_1'];
 
 // instanciar a classe usuario - $obj_usu não é uma variável ... é um OBJETO
 $obj_usu = new Usuario($logForm,$senhaForm);
 
 //se clicou no botao Logar
 if ($botao == "Logar")
 {       
    // instanciar a classe conexao
    $obj_con = new Conexao();
    
    // fazer SELECT no BD
    $dados = $obj_con->select($logForm,$senhaForm);
    
    //Testa se retornou dados do SELECT
    //print_r($dados);
    
    //verifica se array $dados está vazio
    // se estiver vazio, não achou login/senha no BD
    if (!empty($dados)) {  
        //echo "Usuário autenticado.";
        $_SESSION['usuario'] = $dados[0]['usuario'];
        //$nome=$_SESSION['usuario'];
        header("Location:UsuarioOK.php");

    }
    else { 
        //echo "Acesso negado.";
        header('Location:index.php?usuario=NOK');
    }
}	
