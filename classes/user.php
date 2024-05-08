<?php

// Verificar se o formulário foi submetido

        if(isset($_POST['cadastrar'])){

            // Guadar os dados do formulário em variáveis

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
           
            $confSenha = addslashes($_POST['confSenha']);
        
            // Verificar se todos os campos foram preenchidos
            if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confSenha) ) {
        
                // Verificar se as senhas coincidem
                if($senha == $confSenha) {
        
                    // Incluir a classe Usuarios
                    require_once 'classes/Usuarios.php';
        
                    // Instanciar a classe Usuarios
                    $usuarios = new Usuarios("projeto_comentario", "localhost", "root", "");
        
                    // Tentar cadastrar o usuário
                    if($usuarios->cadastrar($nome, $email, $senha, $confSenha)) {
                        echo "Usuário cadastrado com sucesso!";
                    } else {
                        echo "Erro ao cadastrar usuário: email já cadastrado.";
                    }
        
                } else {
                    echo "As senhas não coincidem.";
                }
        
            } else {
                echo "Preencha todos os campos.";
            }
        
        }
        
        ?>
        
   