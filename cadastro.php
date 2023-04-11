<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, data_nascimento, genero, senha) VALUES ('$nome', '$email', '$telefone', '$data_nascimento', '$genero', '$senha')");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Public+Sans:wght@200&family=Sora:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Anek+Devanagari:wght@700&family=Public+Sans:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Sora', sans-serif;
            background-color: #DD8F24;
        }

        h1 {
            color: black;
            font-family: 'Anek Devanagari', sans-serif;
            text-align: center;
            margin-top: 50px;
            font-size: 28px;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: auto;
            max-width: 600px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type=text],
        input[type=password],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            box-sizing: border-box;
        }

        input[type=submit] {
            padding: 12px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .row {
            font-size: 22px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
            font-size: 20px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
            font-size: 13px;
        }

        #submit {
            background-color: black;
            color: white;
            font-family: 'Anek Devanagari', sans-serif;
            margin-left: -13px;
            font-size: 15px;
        }

        @media screen and (max-width: 600px) {
            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>

	<h1>Preencha os campos corretamente</h1>

	<form action="cadastro.php" method="POST">
		<div class="row">
			<div class="col-25">
				<label for="nome">Nome:</label>
			</div>
			<div class="col-75">
				<input type="text" id="nome" name="nome" placeholder="Digite seu nome">
			</div>
		</div>
        <br>
		<div class="row">
			<div class="col-25">
				<label for="email">E-mail:</label>
			</div>
			<div class="col-75">
				<input type="text" id="email" name="email" placeholder="Digite seu e-mail">
			</div>
		</div>
        <br>
		<div class="row">
			<div class="col-25">
				<label for="telefone">Telefone:</label>
			</div>
			<div class="col-75">
				<input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone">
			</div>
		</div>
        <br>
		<div class="row">
            <div class="col-25">
                <label for="data_nascimento">Data de nascimento:</label>
            </div>
            <div class="col-75">
                <input type="date" id="data_nascimento" name="data_nascimento">
            </div>
        </div>
        <br>
        <div class="row">
    <div class="col-25">
        <label for="genero">Gênero:</label>
    </div>
    <div class="col-75">
        <select id="genero" name="genero">
            <option value="m">M</option>
            <option value="f">F</option>
            <option value="o">O</option>
        </select>
    </div>
</div>
<br>
<div class="row">
    <div class="col-25">
        <label for="senha">Senha:</label>
    </div>
    <div class="col-75">
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
    </div>
</div>


    <div>
		<input type="submit" name ="submit" id ="submit" onclick="msg()">
	</div>

		<script>
	function msg() {
	alert("Seu cadastro foi criado com sucesso!");
	}
	</script>