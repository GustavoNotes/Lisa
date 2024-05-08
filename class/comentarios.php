<?php
class Comentarios {
    private $pdo;

    public function __construct($dbname, $host, $usuario, $senha) {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: ".$e->getMessage();
            exit();
        }
    }
public function buscarComentarios() {
    try {
        // Buscar comentários do banco de dados ordenados por data e horário em ordem decrescente
        $sql = $this->pdo->prepare("SELECT c.*, u.nome AS nome_pessoa, u.imagem_capa
                                    FROM comentarios c
                                    LEFT JOIN usuarios u ON c.fk_id_usuario = u.id
                                    ORDER BY c.dia DESC, c.horario DESC");
        $sql->execute();
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    } catch (PDOException $e) {
        echo "Erro ao buscar comentários: " . $e->getMessage();
        return array(); // Retornar um array vazio em caso de erro
    }
}

    public function excluirComentario($id_comentario, $id_user) {
        try {
            // Verificar se o usuário tem permissão para excluir o comentário
            if($id_user == 1) { // Se for um administrador
                $sql = $this->pdo->prepare("DELETE FROM comentarios WHERE id = :id_c");
                $sql->bindValue(":id_c", $id_comentario);
            } else { // Se não for um administrador
                $sql = $this->pdo->prepare("DELETE FROM comentarios WHERE id = :id_comentario AND fk_id_usuario = :id_user");
                $sql->bindValue(":id_comentario", $id_comentario);
                $sql->bindValue(":id_user", $id_user);
            }

            $sql->execute();

            // Verificar se o comando SQL foi executado com sucesso
            if($sql->rowCount() > 0) {
                return true; // Retornar verdadeiro se o comentário foi excluído com sucesso
            } else {
                return false; // Retornar falso se nenhum comentário foi excluído
            }
        } catch (PDOException $e) {
            echo "Erro ao excluir comentário: ".$e->getMessage();
            return false; // Retornar falso em caso de erro
        }
    }

    public function editarComentario($idComentario, $novoTexto) {
        try {
            $sql = $this->pdo->prepare("UPDATE comentarios SET comentario = :novoTexto WHERE id = :idComentario");
            $sql->bindValue(":novoTexto", $novoTexto);
            $sql->bindValue(":idComentario", $idComentario);
            $sql->execute();
            
            return true; // Retornar verdadeiro se a edição for bem-sucedida
        } catch (PDOException $e) {
            echo "Erro ao editar comentário: " . $e->getMessage();
            return false; // Retornar falso em caso de erro
        }
    }

    public function inserirComentario($id_pessoa, $Comentario){
        try {
            $sql = $this->pdo->prepare("INSERT INTO comentarios (comentario, dia, horario, fk_id_usuario) VALUES (:c, :d, :h, :fk)");

            $sql->bindValue(":c", $Comentario);
            $sql->bindValue(":d", date('Y-m-d'));
            $sql->bindValue(":h", date('H:i:s'));
            $sql->bindValue(":fk", $id_pessoa);
            $sql->execute();
            
            return true; // Retornar verdadeiro se a inserção for bem-sucedida
        } catch (PDOException $e) {
            echo "Erro ao inserir comentário: " . $e->getMessage();
            return false; // Retornar falso em caso de erro
        }
    }

    public function entrar($email, $senha){
        $cmd = $this->pdo->prepare("SELECT * from usuarios WHERE email = :e AND senha = :s");
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":s",md5($senha));
        if($cmd->rowCount() > 0){
            $dados = $cmd->fetch();
            session_start();
            if($dados['id'] == 1){
                //usuario adm
                $_SESSION['id_master'] = 1;
            } else {
                $_SESSION['id_usuario'] = $dados['id'];
            } 
            return true; 
        } else {
            echo 'Usuário não encontrado!';
            return false;
        }
    }


}
