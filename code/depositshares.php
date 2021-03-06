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
            grid-template-columns: 1fr 2fr;
            padding: 20px 10px;
            font-size: 10px;
            gap: 5px;
            background-color: #2db9b9;
            width: auto;
            height: auto;
        }
        .grid-container > div {
            background-color: #d6f5f5;
            padding: 10px 5px;
            font-size: 20px;
        }
        .item1 {
            grid-area: 1/1/2/3;
            text-align: center;
        }
        .item2 {
            grid-area: 2/1/3/3;
            text-align: center;
        }
        .item9 {
            grid-area: 6/2/7/3;
        }
        input, select, textarea {
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: center;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="postdepositshares.php" method="post">
        <div class="grid-container">
            <div class="item1">
                Washirika SACCO
            </div>
            <div class="item2">
                Deposit Shares
            </div>
            <div>
                <label for="memberid">Member ID</label>
            </div>
            <div>
                <input type="text" name="memberid" placeholder="Member ID">
            </div>
            <div>
                <label for="amount">Amount</label>
            </div>
            <div>
                <input type="text" name="amount" placeholder="Amount">
            </div>
            <div class="item9">
                <input type="submit" value="Deposit">
            </div>
        </div>
    </form>
</body>
</html>