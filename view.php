<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include './Connection.php';
            $sql="SELECT * FROM `tbl_admin` WHERE `id`=".$_GET["id"].";";
            $result= mysqli_query($link, $sql)
                
        ?>
    </body>
</html>
