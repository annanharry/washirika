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
        }
        .item1 {
            grid-area: 1/1/2/3;
            text-align: center;
        }
        .item2 {
            grid-area: 2/1/3/3;
            text-align: center;
        }
        .item7 {
            grid-area: 5/1/6/3;
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
                Member ID: <br>
                Name: <br>
                <a href="loanlimit.php">Show Limit</a>
            </div>
            <div class="item4">
                Loan Limit:
            </div>
            <div class="item5">
                Amount requested
            </div>
            <div class="item6">
                <input type="text" name="loanrequest" placeholder="Input Amount">
            </div>
            <div class="item7">
                <input type="submit" value="Apply">
            </div>
        </div>
    </form>
</body>
</html>