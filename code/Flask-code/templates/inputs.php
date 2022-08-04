<?php
    include "../../../../phponly/connect.php";
    session_start();

    $member = $_SESSION['search_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Washirika</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
            background-color: #2db9b9;
            padding: 20px 10px;
            gap: 5px;
        }
        .grid-container > div {
            background-color: #d6f5f5;
            height: 50px;
        }
        .item1 {
            grid-area: 1/1/2/3;
            text-align: center;
        }
        .item2 {
            grid-area: 2/1/3/3;
            text-align: center;
        }
        .item3 {
            grid-area: 3/1/4/2;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <form action="{{url_for('predict')}}" method="POST">
            <div class="item1">Washirika SACCO</div>
            <div class="item2">Check Loan Recommendation</div>
            <div class="item3">Member ID</div>
            <div class="item4"><input type="text" name="member_id" placeholder="Enter member ID"></div>
            <div class="item5">Loan Type</div>
            <div class="item6"><input type="text" name="loan" placeholder="loan id"></div>
            <div class="item7">Employer</div>
            <div class="item8"><input type="text" name="employer" placeholder="employer code"></div>
            <div class="item9">Loan Amount</div>
            <div class="item10"><input type="text" name="amount" placeholder="loan amount"></div>
            <div class="item11"><input type="submit" value="Check"></div>
        </form>
        <p>
            {{ data }}
        </p>
        <a href="http://localhost/washirika-1/code/loanrequest.php">Back</a>
    </div>
</body>
</html>