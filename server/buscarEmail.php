<?php
include('./conexao.php');


global $conexao;

// Check connection
if (!$conexao) {
    die("Não foi possível conectar: " . mysqli_connect_error());
}
$query = "SELECT e.cod_email, e.email from email e";
$result = mysqli_query($conexao, $query);
$retorno = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        array_push($retorno, (object)[
            "cod_email" => $row["cod_email"],
            "email" => $row["email"]
        ]);
    }

    http_response_code(201);

    $resposta = [
        'title' => 'Sucesso!',
        'registros' => $retorno
    ];
} else {
    http_response_code(202);
    $resposta = [
        'title' => 'Erro!',

    ];
}
header('Content-Type: application/json');
echo json_encode($resposta);



mysqli_close($conexao);
