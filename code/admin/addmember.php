<?php

include "../phponly/connect.php";

$national_id = $_POST['national_id'];
$name = $_POST['name'];
$employment = $_POST['employment'];
$phone_number = $_POST['phone_number'];
$date_of_birth = $_POST['date_of_birth'];

$sql = mysqli_query($conn, "INSERT INTO members(national_id, name, phone_number, employment, date_of_birth)
    VALUES ('$national_id','$name','$phone_number','$employment','$date_of_birth')");

header("location:managememberadd.html");

?>