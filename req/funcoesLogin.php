<?php 

    function cadastrarUsuario($usuario) {
        try {
            global $conexao;
            $query = $conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)"); //adiciona usuario
    
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
        global $nomeArquivo;
        $nomeLogado = "";
        // pegando o conteúdo do arquivo usuarios.json
        $usuariosJson = file_get_contents($nomeArquivo);
        // transformando o json em array associativo
        $arrayUsuarios = json_decode($usuariosJson, true);
        // verificando se o usuario existe no arquivo usuarios.json
        foreach($arrayUsuarios["usuarios"] as $chave => $valor) {
            // verificando se o email digitado é igual ao email do json
            // verificando se a senha digitada é igual a senha do json
            if ($valor["email"] == $email && password_verify($senha, $valor["senha"])) {
                $nomeLogado = $valor["nome"];
                break;
            }
        }
        return $nomeLogado;
    }
?>