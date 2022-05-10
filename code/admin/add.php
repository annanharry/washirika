<?php
    include "../ses/connect.php";

    $susername = $_POST['susername'];
    $spassword = $_POST['spassword'];
    $stype = $_POST['stype'];
    $smd5password = md5($spassword);

    $sql = mysqli_query($conn, "INSERT INTO logins(member_id_code, username, password, type)
    VALUES ('M','$susername', '$smd5password', '$stype')");
    header("location:managestaffadd.html")
?>