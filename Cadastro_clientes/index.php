<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Cliente</title>

<style>

body{
    font-family: Arial;
    background-color: #f2f2f2;
}

.container{
    width: 400px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-top: 40px;
}

h1{
    text-align: center;
}

input, textarea, select{
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
}

button{
    width: 100%;
    padding: 10px;
    background-color: green;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover{
    background-color: darkgreen;
}

</style>

</head>
<body>

<div class="container">

<h1>Cadastro de Cliente</h1>

<form action="resultado.php" method="POST">

<label>Nome completo:</label>
<input type="text" name="nome" required>

<label>E-mail:</label>
<input type="email" name="email" required>

<label>Idade:</label>
<input type="text" name="idade" required>

<label>Cidade:</label>
<input type="text" name="cidade" required>

<label>Sexo:</label>
<select name="sexo" required>
    <option value="">Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
</select>

<label>Observações:</label>
<textarea name="obs"></textarea>

<button type="submit">Enviar</button>

</form>

</div>

</body>
</html>