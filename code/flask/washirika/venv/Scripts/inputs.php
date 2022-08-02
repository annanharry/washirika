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
</head>
<body>
    <div class="grid-container">
        <form action="{{url_for('home')}}" method="POST">
            <div class="item1">Washirika SACCO</div>
            <div class="itme2">Check Loan Recommendation</div>
            <div>Member ID</div>
            <div><input type="text" name="member_id" placeholder="Enter member ID"></div>
            <div>Loan Type</div>
            <div><input type="text" name="loan" placeholder="loan id"></div>
            <div>Employer</div>
            <div><input type="text" name="employer" placeholder="employer code"></div>
            <div>Loan Amount</div>
            <div><input type="text" name="amount" placeholder="loan amount"></div>
            <div><input type="submit" value="Check"></div>
        </form>
    </div>
</body>
</html>