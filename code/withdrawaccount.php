<?php

include "ses/connect.php";

$memberid = $_POST['memberid'];
$amount = $_POST['amount'];

$sql = mysqli_query($conn, "UPDATE accounts
                            SET account_balance = account_balance - '$amount'
                            WHERE member_id = '$memberid'");

header("location:withdraw.php");
?>