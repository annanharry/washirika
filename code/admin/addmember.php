<?php

include "../ses/connect.php";

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$employment = $_POST['employment'];

$sql = mysqli_query($conn, "INSERT INTO members(member_id_code, first_name, surname, other_names, Employment)
    VALUES ('M','$firstname','$surname','$othernames','$employment')");

header("location:managememberadd.html");

?>