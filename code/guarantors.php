<?php
    include "phponly/connect.php";
    session_start();

    //post the loan amount and type, before guarantors update is made.
    $member = $_SESSION['search_id'];
    $loan_type = $_POST['loan_type'];
    $loan_amount = $_POST['loanrequest'];

    $interestsql = "SELECT * FROM loan_type WHERE loan_type_id = $loan_type";
    $interestresult = mysqli_query($conn,$interestsql);
    $interestrow = $interestresult -> fetch_assoc();
    $interest = $interestrow["interest_rate"];
    $repayment = $interestrow["repayment"];

    $new_loan_amount = $loan_amount + ($loan_amount * $interest);
    $instalments = $new_loan_amount / $repayment;

    $sql = mysqli_query($conn, "INSERT INTO loans(member_id, loan_type_id, amount, instalments) 
                                    VALUES ('$member','$loan_type','$new_loan_amount','$instalments')");

    echo "check database";
?>