<?php 

    function cadastrarUsuario($usuario) {
        try {
            global $conexao;
            $query = $conexao->prepare("INSERT INTO usuarios (nome, email, senha, tipo_usuario_fk) VALUES (:nome, :email, :senha, 3)"); //adiciona usuario
    
            $query->execute([
                ':nome' => $usuario['nome'],
                ':email' => $usuario['email'],
                ':senha' => $usuario['senha']
            ]);

            $usuario = $query->fetchAll(PDO::FETCH_ASSOC); // traz todas as linhas em array associativo
            
            $conexao = null;
        } catch ( PDOException $Exception ) {
            echo $Exception->getMessage();
        }

        return true;
    }

    function logarUsuario($email, $senha) {
        try {
            global $conexao;

            $query = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
            $query->execute([
                ':email' => $email
            ]);

            $usuario = $query->fetch(PDO::FETCH_ASSOC);

            if($usuario['email'] == $email && password_verify($senha, $usuario["senha"])) {
                $infoLogado = [
                    "nomeUsuario" => $usuario['nome'],
                    "tipoUsuario" => $usuario['tipo_usuario_fk']
                ];

                var_dump($infoLogado);
            }

        } catch ( PDOException $Exception ) {
            echo $Exception->getMessage();
        }

        return $infoLogado;
    }
?>