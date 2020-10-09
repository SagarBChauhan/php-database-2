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
        <style>
            input[type=submit]{
                background-color: royalblue;
                color: white;
                border: none;
                padding: 2%;
            }
        </style>
    </head>
    <body>
        <?php
            include './Connection.php';
            // Manually insert
 /*           $sql = "INSERT INTO `tbl_admin`(`uname`, `password`) VALUES ('Admin','1234');";
            $sql_insert=mysqli_query($con, $sql);
            if($sql_insert)
            {
                echo "<p style='color:green;'><i class='fas fa-database'></i> Data Inserted <i class='far fa-check-circle'></i></p><br>";             
            }
            else 
            {
                echo "<p style='color:red;'><i class='fas fa-database'></i> Data Insertion Failed <i class='far fa-times-circle'></i></p><br>";
            }*/
            // insert with form
            if($_SERVER["REQUEST_METHOD"]="POST")
            {
                if(isset($_POST["btn_Submit"]))
                {
                    $sql = "INSERT INTO `tbl_admin`(`uname`, `password`) VALUES ('".$_POST["uname"]."','".$_POST["pass"]."');";
                    $sql_insert=mysqli_query($con, $sql);
                    if($sql_insert)
                    {
                        $lastId=$con->insert_id;
                        header("location:view.php?id=".$lastId);
                        echo "<p style='color:green;'><i class='fas fa-database'></i> Data Inserted <i class='far fa-check-circle'></i></p><br>";             
                    }
                    else 
                    {
                        echo "<p style='color:red;'><i class='fas fa-database'></i> Data Insertion Failed <i class='far fa-times-circle'></i></p><br>";
                    }
                }
            }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table >
                <tbody>
                    <tr>
                        <td>username</td>
                        <td><input type="text" name="uname"  placeholder="username"/></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="password" name="pass" placeholder="password"/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="btn_Submit" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
