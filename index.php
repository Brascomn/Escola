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

<body class="back">
    <img src="css/img/b1.jpg" class="imagem" style="width: 800px;">
    <div class="login-form">

        <h1 class="heading"> Admin Login</h1>
        <div class="login">
        
        <?php

        if (isset($_POST["login"])) {
           $sql = "SELECT * FROM admin WHERE ANAME='{$_POST["aname"]}' and APASS = 
           '{$_POST["apass"]}'";
           $res = $db->query($sql);
           if ($res->num_rows>0) {
            $ro=$res->fetch_assoc();

            $_SESSION["AID"] = $ro["AID"];
            $_SESSION["ANAME"] = $ro["ANAME"];

            echo "<script>window.open('adminhome.php','_self');</script>";
           } else{
            echo "<div class='error'>Nome Inválida ou Senha Inválida </div>";
           }
        }

        ?>
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
            <p>Copy Right &copy;  Sistema de Gestão Escolar</p>
        </footer>
    </div>
</body>
</html>