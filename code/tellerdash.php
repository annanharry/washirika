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
            grid-template-columns: 50% 25%;
            grid-template-rows: 80px 80px 60px;
            padding: 20px 10px;
            font-size: 20px;
            gap: 5px;
            background-color: #2db9b9;
            width: 95vw;
            height: 90vh;
            justify-content: center;
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
        .item4 {
            grid-area: 3/2/4/3;
        }
        input, select, textarea {
            width: 90%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        input [type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input [type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="membersessionstore.php" method="post">
        <div class="grid-container">
            <div class="item1">
                <h3>Washirika SACCO</h3>
            </div>
        
            <div class="item2">
                Search for a member
            </div>
            <div>
                <input type="text" name="search"><br>
            </div>
            <div class="item4">
                <input type="submit" value="Search">
            </div>
        </div>
    </form>
</body>
</html>