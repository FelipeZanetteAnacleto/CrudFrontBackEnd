<?php
session_start();
include('conexao.php');

    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        #criptografar a senha diditada
        $senha_cripto = md5($senha);
        $sql = $conn->prepare("SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND SENHA='$senha_cripto'");

       
        $sql->execute();
        $result = $sql->fetchAll();
        
        if (sizeof($result)>0) {
            #Cria a sessão do usuário logado            
            $_SESSION['logado']=true;
            $_SESSION['nome']= $result[0]['nome']; #armazena em sessão o nome do usuario do db.

            header('location:index.php');

        }
        else{
            header('location:login.php?falhou=1');
        }
        
    }
    else{
        header('location:login.php');
    }
?>