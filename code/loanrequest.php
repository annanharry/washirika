<?php
    include "phponly/connect.php";
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
            height: 40px;
        }
        .item1 {
            grid-area: 1/1/2/3;
            text-align: center;
        }
        .item3 {
            grid-area: 3/1/4/3;
        }
        .item2 {
            grid-area: 2/1/3/3;
            text-align: center;
        }
        .item7 {
            grid-area: 7/2/8/3;
        }
        select {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="guarantors.php" method="POST">
        <div class="grid-container">
            <div class="item1">
                Washirika SACCO
            </div>
            <div class="item2">
                Loan Application Form
            </div>
            <div class="item3">
                <label for="type">Loan type</label>
                <select name="type" id="loanType">
                    <?php
                        $sql = "SELECT type FROM loan_type";
                        //loop to fetch data
                        echo "<option name='loan' value=''>Loan type</option>";
                        foreach ($conn->query($sql) as $row) {
                            echo "<option value=$row[id]>$row[type]</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="limit">Limit</label>
            </div>
            <div>
                Ksh.
                <?php
                    //$member = $_SESSION['search_id'];
                    $sql = "SELECT * FROM savings WHERE member_id LIKE '%$member%'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $savings = $row["savings_balance"];

                    $sql1 = "SELECT * FROM shares WHERE member_id LIKE '%$member%'";
                    $result1 = $conn->query($sql1);
                    $row1 = $result1->fetch_assoc();
                    $shares = $row1["share_balance"];

                    //loan limit
                    $limit = ($savings + $shares)* 3;

                    echo $limit;
                ?>
            </div>
            <div class="item5">
                Amount requested
            </div>
            <div class="item6">
                <input type="text" name="loanrequest" placeholder="Input Amount">
            </div>
            <div>
                Instalments
                <!--<script> FUTURE js UPDATES.
                    var loanType = document.getElementById("loanType");
                    document.write(loanType);
                </script>-->
            </div>
            <div>
                Ksh.
            </div>
            <div class="item7">
                <input type="submit" value="Apply">
            </div>
        </div>
    </form>
</body>
</html>