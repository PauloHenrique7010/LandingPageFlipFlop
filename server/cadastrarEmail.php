<?php

//referencia
//https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Status

include('./conexao.php');

//recebe o email do fron-end
$json = $_POST['data'];
$json = json_decode($json);
$email = $json->email;

$resposta = array();
//valida e já cadastra no banco
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (cadastrarEmail($email)) {
        http_response_code(201);

        $resposta = [
            'title' => 'Sucesso!',
            'message' => 'E-mail cadastrado em nosso banco de dados!'
        ];
    } else {
        http_response_code(202);
        $resposta = [
            'title' => 'Erro!',
            'message' => $conexao->error
        ];
    }
} else {
    http_response_code(203);
    $resposta = [
        'title' => 'Ops...',
        'message' => 'O e-mail informado não é válido'
    ];
}

//devolve resposta para o front
header('Content-Type: application/json');
echo json_encode($resposta);



function cadastrarEmail($email)
{
    global $conexao;

    // Check connection
    if (!$conexao) {
        die("Não foi possível conectar: " . mysqli_connect_error());        
    }
    $query = "INSERT INTO email (email) VALUES ('" . $email . "')";
    $insert = mysqli_query($conexao, $query);

    if ($insert)
        return true;
    else
        return false;

    mysqli_close($conexao);
}
