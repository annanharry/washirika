<?php
    include "phponly/connect.php";
    session_start();

    //post the loan amount and type, before guarantors update is made.
    $member = $_SESSION['search_id'];
    $loan_type = $_POST['type'];
    $loan_amount = $_POST['loanrequest'];

    echo $member;
    echo $loan_type;
    echo $loan_amount;
?>