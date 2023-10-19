<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$idade=$_POST['idade'];
$cpf=$_POST['CPF'];


if(!$nome || $nome == ""){
    echo ' Você inseriu seu nome de forma incorreta.';
    return false;
}else if(!$sobrenome || $sobrenome == ""){
    echo ' Você inseriu o seu sobrenome de forma incorreta.';
    return false;
}else if($idade == 0 || $idade == ""){
    echo' Você inseriu sua idade de forma incorreta';
    return false;
}else if ($cpf == ''){
    echo ' Você digitou seu CPF de forma incorreta.';
    return false;
}else if (strlen($cpf) != 11){
    echo ' Você digitou seu CPF de forma incorreta.';
    return false;
}

$arquivo = __DIR__ . DIRECTORY_SEPARATOR . "resposta_form.txt";
$file = fopen($arquivo, "w");
fwrite($file, 'Nome :'. $nome . ', ' );
fwrite($file, 'Sobrenome : '. $sobrenome . ', ');
fwrite($file, 'Idade : '. $idade .', ');
fwrite($file, 'CPF : '. $cpf .', ');
fclose($file);

echo 'Você preencheu o formulário com sucesso!'





?>



</body>
</html>