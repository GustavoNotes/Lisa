<?php
class Usuarios {
    private $pdo;

    // Método construtor da classe
    public function __construct($dbname, $host, $usuario, $senha) {
        try {
            // Inicializa uma conexão com o banco de dados MySQL usando PDO
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
            // Define o modo de erro para exceção (lança exceções em caso de erros)
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Em caso de falha na conexão, exibe uma mensagem de erro e encerra o script
            echo "Erro ao conectar ao banco de dados: ".$e->getMessage();
            exit();
        }
    }

    // Método para excluir um comentário do banco de dados
    public function excluirComentario($id_comentario, $id_user) {
        if ($id_user == 1) { // Verifica se o usuário é um administrador
            // Prepara e executa uma query para excluir um comentário com base no ID
            $sql = $this->pdo->prepare("DELETE FROM comentarios WHERE id = :id_c");
            $sql->bindValue(":id_c", $id_comentario);
            $sql->execute();
        }
    }

    // Método para cadastrar um novo usuário
    public function cadastrar($nome, $email, $senha) {
        try {
            // Verificar se o email já está cadastrado
            $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = :e");
            $sql->bindValue(":e", $email);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                return false; // Email já cadastrado
            } else {
                // Insere o novo usuário no banco de dados
                $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:n, :e, :s)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", md5($senha)); // Usa MD5 para hashear a senha antes de salvar
                $sql->execute();
                return true; // Usuário cadastrado com sucesso
            }
        } catch (PDOException $e) {
            // Em caso de falha no cadastro, exibe uma mensagem de erro
            echo "Erro ao cadastrar usuário: ".$e->getMessage();
            return false;
        }
    }

    // Método para autenticar um usuário
    public function entrar($email, $senha) {
        try {
            // Verifica se as credenciais de login são válidas
            $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = :e AND senha = :s");
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha)); // Usa MD5 para comparar com a senha hasheada no banco
            $sql->execute();

            if ($sql->rowCount() > 0) {
                // Usuário autenticado
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['id_usuario'] = $dados['id'];
                return true;
            } else {
                // Falha na autenticação
                return false;
            }
        } catch (PDOException $e) {
            // Em caso de falha na autenticação, exibe uma mensagem de erro
            echo "Erro ao tentar fazer login: ".$e->getMessage();
            return false;
        }
    }

    // Método para buscar dados de um usuário pelo ID
    public function buscarDadosUser($id) {
        $cmd = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $dados = $cmd->fetch(); // Retorna os dados do usuário encontrado
        return $dados;
    }

    // Método para atualizar a imagem de perfil de um usuário
    public function atualizarImagemPerfil($idUsuario, $caminhoImagem) {
        try {
            // Prepara e executa uma query para atualizar o caminho da imagem de perfil
            $sql = $this->pdo->prepare("UPDATE usuarios SET imagem_capa = :caminho WHERE id = :id");
            $sql->bindValue(":caminho", $caminhoImagem);
            $sql->bindValue(":id", $idUsuario);
            $sql->execute();
        } catch (PDOException $e) {
            // Em caso de falha na atualização, exibe uma mensagem de erro
            echo "Erro ao atualizar imagem de perfil: " . $e->getMessage();
        }
    }
}
?>


<!--Aqui estão as explicações:

 1° Construtor (__construct): Este método é executado automaticamente quando um objeto da classe é instanciado.
 Ele é usado para inicializar a conexão com o banco de dados usando
 as informações fornecidas (nome do banco de dados, host, usuário e senha).

2° Método excluirComentario: Este método permite excluir um comentário do banco de dados. Ele verifica se o
 usuário é um administrador antes de executar a exclusão.

3° Método cadastrar: Este método é usado para cadastrar um novo usuário no banco de dados. Ele verifica se o email já
 está cadastrado antes de inserir os dados do novo usuário.

4° Método entrar: Este método é utilizado para autenticar um usuário. Ele verifica se as credenciais de login (email e senha)
 são válidas.

5° Método buscarDadosUser: Este método busca os dados de um usuário pelo seu ID no banco de dados.

6° Método atualizarImagemPerfil: Este método é usado para atualizar a imagem de perfil de um usuário no banco de dados.