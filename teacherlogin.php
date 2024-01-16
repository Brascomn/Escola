<?php 

include "database.php";
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ACESSO DE PROFESSORES</title>
</head>

<body class="back">
    <?php include "navbar.php";?>
    <img src="css/img/b1.jpg" class="imagem" style="width: 800px;">
      <div class="login-form">

        <h1 class="heading">ACESSO DE PROFESSOR </h1>
        <div class="login">
    <?php
    
    
    if (isset($_POST["login"])) {
        $sql = "SELECT * FROM staff WHERE TNAME='{$_POST["aname"]}' and TPASS = 
        '{$_POST["apass"]}'";
        $res = $db->query($sql);
        if ($res->num_rows>0) {
         $ro=$res->fetch_assoc();

         $_SESSION["TID"] = $ro["TID"];
         $_SESSION["TNAME"] = $ro["TNAME"];

         echo "<script>window.open('teacherhome.php','_self');</script>";
        } else{
         echo "<div class='error'>Nome Inválido ou Senha Inválida </div>";
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