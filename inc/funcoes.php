<?php 
    // funções
    function validarNome($nome) {
        return strlen($nome) > 0 && strlen($nome) <= 15;
    }

    function validarCpf($cpf) {
        return strlen($cpf) == 11;
    }

    function validarNroCartao($nroCartao) {
        $primeiroNum = substr($nroCartao, 0, 1);
        return  $primeiroNum == 4 || $primeiroNum == 5 || $primeiroNum == 6;
    }

    // Validar se a data inserida é maior que a data atual
    function validarData($data) {
        $dataAtual = date("Y-m");
        return $data >= $dataAtual;
    }

    function validarCvv($cvv) {
        return strlen($cvv) == 3;
    }

    function validarCompra($nome, $cpf, $nroCartao, $data, $cvv) {
        global $erros;
        
        if (!validarNome($nome)) {
            array_push($erros, "Preencha seu nome");
        }
        
        if (!validarCpf($cpf)) {
            array_push($erros, "Seu CPF precisa ter 11 caracteres");
        }
        
        if (!validarNroCartao($nroCartao)) {
            array_push($erros, "Seu cartão precisa começar com 4, 5 ou 6");
        }

        if (!validarData($data)) {
            array_push($erros, "A validade precisa ser maior que a data atual");
        }

        if (!validarCvv($cvv)) {
            array_push($erros, "Seu CVV precisar ter 3 caracteres");
        }
    }
?>