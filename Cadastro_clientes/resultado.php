<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$sexo = $_POST['sexo'];
$obs = $_POST['obs'];

echo "<h1>Resultado do Cadastro</h1>";

if(empty($nome) || empty($email) || empty($idade) || empty($cidade) || empty($sexo)){

    echo "Preencha todos os campos obrigatórios!";

} elseif(!is_numeric($idade)) {

    echo "A idade deve ser numérica!";

} else {

    echo "Nome: " . $nome . "<br><br>";
    echo "E-mail: " . $email . "<br><br>";
    echo "Idade: " . $idade . "<br><br>";
    echo "Cidade: " . $cidade . "<br><br>";
    echo "Sexo: " . $sexo . "<br><br>";
    echo "Observações: " . $obs . "<br><br>";

    echo "<h2>Cadastro realizado com sucesso!</h2>";
}

?>