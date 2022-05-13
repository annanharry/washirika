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
            text-align: center;
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
            <div class="item3">
                Member ID: <br>
                Name: <br>
                <a href="">Show Limit</a>
            </div>
            <div class="item4">
                Loan Limit:
            </div>
            <div class="item5">
                Amount requested
            </div>
            <div class="item6">
                <input type="text" name="loanrequet" placeholder="Input Amount">
            </div>
            <div class="item7">
                Guaranters List
            </div>
            <div>
                1<input type="text" name="guaranter1" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount1" placeholder="amount">
            </div>
            <div>
                2<input type="text" name="guaranter2" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount2" placeholder="amount">
            </div>
            <div>
                3<input type="text" name="guaranter3" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount3" placeholder="amount">
            </div>
            <div>
                4<input type="text" name="guaranter4" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount4" placeholder="amount">
            </div>
            <div>
                5<input type="text" name="guaranter5" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount5" placeholder="amount">
            </div>
            <div>
                6<input type="text" name="guaranter6" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount6" placeholder="amount">
            </div>
            <div>
                7<input type="text" name="guaranter7" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount7" placeholder="amount">
            </div>
            <div>
                8<input type="text" name="guaranter8" id="" placeholder="add Guaranter">
            </div>
            <div>
                <input type="text" name="guaranteeamount8" placeholder="amount">
            </div>
        </div>
    </form>
</body>
</html>