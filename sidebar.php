<div class="sidebar">
    <h3 class="text">DASHBOARD</h3><br><hr><br>

    <ul class="side"> <?php
    if(isset($_SESSION["AID"]) ||(  $_SESSION["TID"])){
        echo '
        <li class="li"><a href="adminhome.php"> Informação Escolar</a></li>
        <li class="li"><a href="addclass.php"> Informação de Classes </a></li>
        <li class="li"><a href="addsub.php"> Informção de Assutos </a></li>
        <li class="li"><a href="addstaff.php"> Informação da Equipa</a></li>
        <li class="li"><a href="viewstaff.php"> Os nosso Colaboradores</a></li>
        <li class="li"><a href="setexam.php"> Marcar Exame Escolar</a></li>
        <li class="li"><a href="student.php"> Informação de Estudante</a></li
        
        ';
    } else{

       echo'
        <li class="li"><a href=""> </a></li>
        <li class="li"><a href=""> </a></li>
        <li class="li"><a href=""> </a></li>
        <li class="li"><a href=""> </a></li>
        ';
    }
    ?></ul>
</div>