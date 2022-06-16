<?php
    include "phponly/connect.php";
    session_start();

    
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
            height: 30px;
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
    </style>
</head>
<body>
    <form action="loanlimit.php" method="POST">
        <div class="grid-container">
            <div class="item1">
                Washirika SACCO
            </div>
            <div class="item2">
                Loan Application Form
            </div>
            <div class="item3">
                <label for="type">Loan type</label>
                <select name="type" id="">
                    <?php
                        include "phponly/connect.php";
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
            </div>
            <div class="item5">
                Amount requested
            </div>
            <div class="item6">
                <input type="text" name="loanrequest" placeholder="Input Amount">
            </div>
            <div>
                Instalments
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