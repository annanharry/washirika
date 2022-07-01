<?php
    include ("phponly/connect.php");
    session_start();

    $member = $_SESSION['search_id'];

    if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }
?>
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
        }
        .grid-container>div {
            background-color: #d6f5f5;
            height: 50px;
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
                $sql = "SELECT * FROM members WHERE member_id LIKE '%$member%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["member_id"];
                    }
                } else {
                    echo "0 records";
                }
            ?>
        </div>
        <div>
            Name:
            <?php
                $sql = "SELECT * FROM members WHERE member_id LIKE '%$member%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["name"];   
                    }
                } else {
                    echo "0 records";
                }
            ?>
        </div>
        <div>
            Employment:
            <?php
                $sql = "SELECT * FROM members WHERE member_id LIKE '%$member%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["employment"];   
                    }
                } else {
                    echo "0 records";
                }
            ?>
        </div>
        <div>
            Share Capital
            <?php
                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }
                $sql = "SELECT * FROM shares WHERE member_id LIKE '%$member%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["share_balance"];   
                    }
                } else {
                    echo "0 ";
                }
            ?>
        </div>
        <div>
            Account Balance
            <?php
                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }
                $sql = "SELECT * FROM savings WHERE member_id LIKE '%$member%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo $row["savings_balance"];   
                    }
                } else {
                    echo "0";
                }
            ?>
        </div>
        <div>
            Loan Balance
            <?php
                if ($conn->connect_error){
                    die("Connection failed: ". $conn->connect_error);
                }
                $sql = "SELECT SUM(amount) FROM loans WHERE member_id = $member";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['SUM(amount)'];
                } 
            ?>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Withdraw</button>
            <Div class="dropdown-content">
                <a href="withdrawshare.php">From Shares</a>
                <a href="withdraw.php">From Account</a>
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
<?php
    $conn->close();
?>