<?php
include './Connection.php';
/*
$sql = "INSERT INTO `tbl_admin`(`uname`, `password`) VALUES ('Sagar','Pass1');";
$sql .= "INSERT INTO `tbl_admin`(`uname`, `password`) VALUES ('Rinam','Pass2');";
$sql_insert=  mysqli_multi_query($con, $sql);
if($sql_insert)
{
    echo "<p style='color:green;'><i class='fas fa-database'></i> Data Inserted <i class='far fa-check-circle'></i></p><br>";             
}
else 
{
    echo "<p style='color:red;'><i class='fas fa-database'></i> Data Insertion Failed <i class='far fa-times-circle'></i></p><br>";
}*/
$sql = "select * from tbl_admin;";
$sql .= "INSERT INTO `tbl_admin`(`uname`, `password`) VALUES ('Rinam','Pass2');";
$con->multi_query($sql);
do
{
    if($res=$con->store_result())
    {
        var_dump($res->fetch_all(MYSQLI_ASSOC));
        $res->$free();
        echo 'inside';
    }
    echo "<p style='color:green;'><i class='fas fa-database'></i> Data Inserted <i class='far fa-check-circle'></i></p><br>";             
}while($con->more_results() && $con->next_result());
