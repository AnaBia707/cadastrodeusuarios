<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $data_nascimento = $user_data['data_nascimento'];
                $genero = $user_data['genero'];
                $senha = $user_data['senha'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Public+Sans:wght@200&family=Sora:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Anek+Devanagari:wght@700&family=Public+Sans:wght@200&display=swap" rel="stylesheet">

    <title>Editar cadastro | DEVPLUS</title>
    <style>
        body{
            font-family: 'Sora', sans-serif;
            background-color: #DD8F24;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid black;
        }
        legend{
            padding: 10px;
            text-align: center;
            background-color: black;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: black;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        .senha{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit{
            font-family: 'Anek Devanagari', sans-serif;
            background-color: black;
            width: 28px%;
            margin-left: 90px;
            border: none;
            padding: 15px;
            color: white;
            font-size: 20px;
            cursor: pointer;
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" value=<?php echo $data_nascimento;?> required>
                    <label for="data_nascimento" class="labelInput">Data de nascimento</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="f" name="genero" value="f" <?php echo ($genero == 'f') ? 'checked' : '';?> required>
                <label for="f">F</label>
                <br>
                <input type="radio" id="m" name="genero" value="m" <?php echo ($genero == 'm') ? 'checked' : '';?> required>
                <label for="m">M</label>
                <br>
                <input type="radio" id="o" name="genero" value="o" <?php echo ($genero == 'o') ? 'checked' : '';?> required>
                <label for="o">O</label>
                <br><br>
                <br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>