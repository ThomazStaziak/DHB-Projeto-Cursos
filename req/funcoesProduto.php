<?php

function adicionarProduto($produto){
    try {
        global $conexao;

        $query = $conexao->prepare("INSERT INTO cursos (nome, descricao, preco, tag, image, professor_fk) 
                                    VALUES (:nome, :descricao, :preco, :tag, :image, :professor_fk);");
        $query->execute([
            ':nome' => $produto['nome'],
            ':descricao' => $produto['descricao'],
            ':preco' => $produto['preco'],
            ':tag' => $produto['tag'],
            ':image' => $produto['imagem'],
            ':professor_fk' => $produto['professor']
        ]);

        $novoProduto = $query->fetchAll(PDO::FETCH_ASSOC);

        $conexao = null;
    } catch ( PDOException $Exception ) {
        echo $Exception->getMessage();
    }

    return true;
}