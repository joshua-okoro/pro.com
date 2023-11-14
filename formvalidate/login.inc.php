<?php
include_once("dbconnect.php");
if(isset($_POST["submit"])){
      $name=$_POST["name1"];
        $lastname=$_POST["lastname"];
        $sql="select * from `users` where name1='$name' and lastname='$lastname'";
        $result=mysqli_query($conn,$sql);
        if($result){
            $nmu=mysqli_num_rows($result);
            if($nmu>0){
                echo"login successful";
                header("location:home.php");
            }else{
                echo "invalid please creat an account";
            }
        }
}