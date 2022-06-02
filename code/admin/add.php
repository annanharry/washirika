<?php
    include "../phponly/connect.php";

    $national_id = $_POST['national_id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $md5password = md5($password);

    $sql = mysqli_query($conn, "INSERT INTO staff(name, national_id, role, username, password)
    VALUES ('$name','$national_id', '$role', '$username','$md5password')");
    
    header("location:managestaffadd.html")
?>