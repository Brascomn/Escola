<?php 

include'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bem Vindo ao Sistema de Gerenciamento Escolar</title>
</head>

<body >
    <img src="css/img/b1.jpg" class="imagem">
    <div class="login-form">

        <h1 class="heading"> Admin Login</h1>
        <div class="login">
            <div class="log">
                <form action="" method="post">
                    <label for="">Nome</label>
                    <input type="text" name="aname" class="input" required> <BR></BR>
                    <label >Senha:</label>
                    <input type="Password" name="apass" class="input"required> <BR></BR>
                    <button type="submit" class="btn" name="login">ACESSAR</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <footer>
            <p>Copy Right &copy;  Sistema de Gerenciamento Escolar</p>
        </footer>
    </div>
</body>
</html>