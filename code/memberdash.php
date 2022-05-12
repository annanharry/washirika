<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Washirika</title>
    <style>
        .grid-container{
            display: grid;
            grid-template-columns: 25vw 25vw 25vw;
            justify-content: center;
            background-color: #2db9b9;
            gap: 10px;
            padding: 10px;
            height: 95vh;
        }
        .grid-container>div {
            background-color: #d6f5f5;
        }
        .item1 {
            grid-area: 1 / 1 / 2 / 4;
            text-align: center;
        }
        .item2 {
            grid-area: 2 / 1 / 3 / 4;
            text-align: center;
        }
        .item12 {
            grid-area: 6/2/7/3;
            text-align: center;
        }
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #f1f1f1;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="item1">
            <h3>Washirika SACCO</h3>
        </div>
        <div class="item2">
            Member Account
        </div>
        <div>
            Member ID:
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
                        echo $row["member_id"];   
                    }
                } else {
                    echo "0 records";
                }
                $conn->close();
            ?>
        </div>
        <div>
            Name:
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
                        echo $row["first_name"]." ".$row["surname"]." ".$row["other_names"];   
                    }
                } else {
                    echo "0 records";
                }
                $conn->close();
            ?>
        </div>
        <div>
            Employment:
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
                        echo $row["Employment"];   
                    }
                } else {
                    echo "0 records";
                }
                $conn->close();
            ?>
        </div>
        <div>
            Share Capital
            <?php
                include "ses/connect.php";
                $search = $_POST['search'];
                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }
                $sql = "SELECT * FROM shares WHERE member_id LIKE '%$search%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["shares_amount"];   
                    }
                } else {
                    echo "0 ";
                }
                $conn->close();
            ?>
        </div>
        <div>
            Account Balance
            <?php
                include "ses/connect.php";
                $search = $_POST['search'];
                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }
                $sql = "SELECT * FROM accounts WHERE member_id LIKE '%$search%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["account_balance"];   
                    }
                } else {
                    echo "0";
                }
                $conn->close();
            ?>
        </div>
        <div>
            Loan Balance
            <?php
                include "ses/connect.php";
                $search = $_POST['search'];
                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }
                $sql = "SELECT * FROM loans WHERE member_id LIKE '%$search%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["loan_amount"];   
                    }
                } else {
                    echo "0";
                }
                $conn->close();
            ?>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Withdraw</button>
            <Div class="dropdown-content">
                <a href="withdraw.php">From Shares</a>
                <a href="withdrawshare.php">From Account</a>
            </Div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">Deposit</button>
            <Div class="dropdown-content">
                <a href="postdepositshares.php">Shares</a>
                <a href="postdepositaccount.php">Account</a>
            </Div> 
        </div>
        <div class="dropdown">
            <button class="dropbtn">
                <a href="repay.php">Repay Loan</a>
            </button>
        </div>
         <div class="item12">
            <a href="loanrequest.php">Request loan</a> 
         </div>
    </div>
</body>
</html>