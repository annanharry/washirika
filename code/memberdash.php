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
                        echo $row["member_id"];   
                    }
                } else {
                    echo "0";
                }
                $conn->close();
            ?>
        </div>
        <div>
            <a href="">Witdraw</a>  
        </div>
        <div>
            <a href="">Deposit</a> 
        </div>
        <div>
            <a href="">Repay loan</a> 
        </div>
         <div>
            <a href="">Request loan</a> 
         </div>
    </div>
</body>
</html>