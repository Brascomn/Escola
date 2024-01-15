<div class="sidebar">
    <h3 class="text">DASHBOARD</h3> <br><hr><br>

    <ul class="side"> <?php
    if(isset($_SESSION["AID"])){
        Echo '
        <li class="li"><a href="adminhome.php"> Imformção Escolar</a></li>
        <li class="li"><a href="addclass.php"> Imformção de Classes </a></li>
        <li class="li"><a href="addsub.php"> Imformçã</a></li>
        <li class="li"><a href="addstuff.php"> Imformção do Elenco</a></li>
        <li class="li"><a href="viewstuff.php"> Imformção Escolar</a></li>
        <li class="li"><a href="setexam.php"> Marcar Exame Escolar</a></li>
        <li class="li"><a href="student.php"> Imformção de Estudante</a></li>
        <li class="li"><a href="logout.php"> Imformção Escolar</a></li>
        
        ';
    }
    ?></ul>
</div>