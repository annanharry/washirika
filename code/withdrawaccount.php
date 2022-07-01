<?php
include "phponly/connect.php";
session_start();

$memberid = $_SESSION['search_id'];
$amount = $_POST['amount'];

$sql = mysqli_query($conn, "UPDATE savings
                            SET savings_balance = savings_balance - '$amount'
                            WHERE member_id = '$memberid'");

header("location:withdraw.php");
?>