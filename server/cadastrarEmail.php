<?php

//referencia
//https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Status

include('./conexao.php');

//recebe o email do fron-end
$json = $_POST['data'];
$json = json_decode($json);
$email = $json->email;

$resposta = array();
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //é um email valido
    if (verificaEmailExiste($email)) { //se o email informado ja esta no banco
        http_response_code(203);
        $resposta = [
            'title' => 'Ops!',
            'message' => 'O e-mail informado já está cadastrado no banco de dados!'
        ];
    } else { //nao existe email no BD
        if (cadastrarEmail($email)) { //Consegiu cadastrar
            http_response_code(201);

            $resposta = [
                'title' => 'Sucesso!',
                'message' => 'E-mail cadastrado em nosso banco de dados!'
            ];
        } else { //nao consegiu cadastrar
            http_response_code(202);
            $resposta = [
                'title' => 'Erro!',
                'message' => $conexao->error
            ];
        }
    }
} else { //email nao e valido
    http_response_code(203);
    $resposta = [
        'title' => 'Ops...',
        'message' => 'O e-mail informado não é válido'
    ];
}


//devolve resposta para o front
header('Content-Type: application/json');
echo json_encode($resposta);

function verificaEmailExiste($email)
{

    global $conexao;

    // Check connection
    if (!$conexao) {
        die("Não foi possível conectar: " . mysqli_connect_error());
    }
    $query = "select * from email where email = '$email'"; // where email = '"+$email+"'";
    $select = mysqli_query($conexao, $query);


    if ($select->num_rows > 0)
        return true;
    else
        return false;

    mysqli_close($conexao);
}

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
