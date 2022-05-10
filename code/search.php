<?php

include "ses/connect.php";

$search = $_POST['search'];

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM members WHERE member_id LIKE '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row["first_name"]." ".$row["surname"]." ".$row["Employment"]."<br>";
    }
} else {
    echo "0 records";
}

$conn->close();

//header("location:memberdsh.php")

?>