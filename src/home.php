<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 150, 200), rgb(17, 50, 70));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);  
            padding: 25px;
            border-radius: 15px; 
            width: 10%;     
        }
        a{
            text-decoration: none;
            border: 3px solid dodgerblue;
            color: white;
            border-radius: 10px;
            padding: 4px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastro</a></div>
</body>
</html>