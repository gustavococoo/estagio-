<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 150, 200), rgb(17, 50, 70));
        }
        .Box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 23%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            letter-spacing: 0.5px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            border: none;
            background: none;
            border-bottom: 1px solid white;
            outline: none;
            font-size: 15px;
            color: white;
            width: 100%;
            letter-spacing: 1px;
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
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            outline: none;
            border-radius: 10px;
            padding: 8px;
            font-size: 12px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(43, 109, 136), rgb(7, 11, 224));
            border: none;
            width: 100%;
            padding: 15px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
        }
        .img{
            width: 50%; /* Ajuste o valor conforme necessário para diminuir a imagem */
           height: auto
        }
    </style>
</head>
<body>
    <div class="Box">
        <img src="logo_cest.png" alt="Imagem de cabeçalho" id="imagem">
        <form action="">
            <fieldset>
                <legend><b>Cadastro de Visitantes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <div>
                    <p>Sexo</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>