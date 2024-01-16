<div class="navbar">
    <ul class="list" style="color:white; float:center; line-height:50px;
    margin-left:15px; font-family:Cooper black;">
    <b>Sistema de Gestão Escolar</b>

    <?php
    if(isset($_SESSION["AID"])){
        echo '
        <li><a href="index.php"> Informação Escolar</a></li>
        <li><a href="changpass.php"> Definições</a></li>
        <li><a href="logout.php"> Sair</a></li>
      ';

    }else{
        echo '
        <li><a href="index.php"> ADMIN</a></li>
        <li><a href="teacherlogin.php"> Professores</a></li>
        <li><a href="contactus.php"> Contacto-nos</a></li>
      ';
    }

?>


</ul>
</div>