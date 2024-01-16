<?php 

include "database.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css">
    <title>Bem Vindo ao Sistema de Gerenciamento Escolar</title>
</head>

<body >
<?php include "navbar.php";?>
    <img src="css/img/1.jpg" class="sha">
    <div id="section">
        <?php include "sidebar.php"?>
        <div id="content">
            <h3 class="text">SEJA BEM-VINDO! Prof. <?php echo $_SESSION["TNAME"]; ?></h3></br><hr><br>
           
    </div>

    <div class="footer">
        <footer>
            <p>Copy Right &copy; Sistema de Gestão Escolar</p>
        </footer>
    </div>
</body>
</html>