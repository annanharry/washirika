<?php
    include "connect.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $password = mysqli_real_escape_string($conn,$_POST['username']);
        $username = mysqli_real_escape_string($conn,$_POST['password']);

        $md5password = md5($password);

        $sql = "SELECT staff_id FROM staff WHERE username = '$username' AND password = '$md5password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if ($count == 1){
            $_SESSION['login_user'] = $username;

            header("location: ../tellerdash.html");
        }
    }else{
        $error="The Username or Password is invalid";
    }

    //header("location:../search.php");
?>