<?php
    include "phponly/connect.php";
    session_start();

    //post the loan amount and type, before guarantors update is made.
    $member = $_SESSION['search_id'];
    $loan_type = $_POST['loan_type'];
    $loan_amount = $_POST['loanrequest'];

    $interestsql = "SELECT interest_rate, repayment FROM loan_type WHERE loan_type_id LIKE %$loan_type%";
    $interestresult = $conn->query($interestsql);
    $interestrow = $interestresult -> fetch_assoc();
    $interest = $interestrow["interest_rate"];
    $repayment = $interestrow["repayment"];

    $new_loan_amount = $loan_amount * $interest;
    $installments = $new_loan_amount / $repayment;

    $sql = mysqli_query($conn, "INSERT INTO loans(member_id, loan_type_id, amount, installments) 
                                    VALUES ('$member','$loan_type','$new_loan_amount','$installments')");

    echo "check database";
?>