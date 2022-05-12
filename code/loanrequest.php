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
            grid-template-columns: auto ;
            background-color: #2db9b9;
            padding: 20px 10px;
            gap: 5px;
        }
        .grid-container > div {
            background-color: #d6f5f5;
        }
    </style>
</head>
<body>
    <form action="sendloanrequest.php" method="POST">
        <div class="grid-container">
            <div class="item1">
                Washirika SACCO
            </div>
            <div class="item2">
                Loan Application Form
            </div>
            <div></div>
        </div>
    </form>
</body>
</html>