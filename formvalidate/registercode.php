<?php
if(isset($_POST["submit"])){
        $name=$_POST["name1"];
        $lastname=$_POST["lastname"];
    require_once("dbconnect.php");

    $sql="select * from `users` where name1='$name'";
    $result=mysqli_query($conn,$sql);
    if($result){
    
        $num=mysqli_num_rows($result);
        echo"$num";
        if(empty($name)||empty($lastname)){
            echo "empty input";
            exit();
        }
        
        if($num> 0){
            echo "user already exit";
    exit();
         

        }
        
        else{
            
            $sql="insert into users (name1,lastname) values ('$name','$lastname')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "successfully inserted";
            }else{
                die("connection failed".mysqli_error($conn));
            }
        }
       
    }
}