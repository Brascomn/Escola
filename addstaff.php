<?php 

include "database.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=\"width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css">
    <title>Bem Vindo ao Sistema de Gerenciamento Escolar</title>
</head>

<body >
<?php include "navbar.php";?>
    <img src="css/img/1.jpg" class="sha">
    <div id="section">
        <?php include "sidebar.php"?>
        <div id="content">
            <h3 class="text">SEJA BEM-VINDO! <?php echo $_SESSION["ANAME"]; ?></h3></br><hr><br>
            <h3>ADD STAFF DETAILS</h3> <br>
            <?php

            if (isset($_POST["submit"])) {
                $sq ="insert into staff (TNAME,QUL,SAL) values ('{$_POST["sname"]}','{$_POST["qname"]}','{$_POST["nname"]}')";
               if ($db->query($sq)) {
                echo "<div class='sucess'> insert class sucess</div>";
            }else{
                
                echo "<div class='error'> insert class failed </div>";
               }
            }
            ?>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            
            <label for="">STAFF NAME</label> </br>
            <input type="text" name="sname" required class="input2"> </br>
            <label for="">QUALIFICATION</label> </br>
            <input type="text" name="qname" required class="input2"> </br> 
            <label for="">SALARY</label> </br>
            <input type="text"  name="nname" required class="input2"> </br>

             <button type="submit" class="btn" name="submit"> ADD </button>

            </form>
        </div>
        <br>
        <div class="tbox">
        <!-- <h3>SUBJECT Details</h3><br> -->
            <table border="1px">
                 
                        <?php 

            if (isset($_GET["mes"])) {

                echo "<div class='error'>{$_GET["mes"]}</div>";
            }
?>
                <tr>
                    <th>S.No</th>
                    <th>Subject Name</th>
                    <th>Delete</th>
                </tr>
                <?php
                 $s="select *from staff ";
                 $res = $db->query($s);
                 if ($res->num_rows>0) {

                    $i=0;

                    while($r=$res->fetch_assoc()){
                        
                        $i++;
                        echo "<tr> 
                        <td>${i}</td>
                        <td>{$r["TNAME"]}</td>
                        <td><a href='deletesub.php?id={$r["TID"]}' class='btnr'> Delete</td>
                     </tr>";
                    }
                    
                 }
                 ?> 
            </table>
            <br>
        </div>
    </div>

    <div class="footer">
        <footer>
            <p>Copy Right &copy; Sistema de Gestão Escolar</p>
        </footer>
    </div>
</body>
</html>