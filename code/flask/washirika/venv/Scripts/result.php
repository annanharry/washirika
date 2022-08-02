<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Washirika</title>
</head>
<body>
    <center>
        <h2> RECOMMENDATION : </h2>
        {%if data == 0%}
        <h3>Bad Loan</h3>

        {%else%}
        <h3>Good Loan</h3>

        {%endif%}
        <br><br>
        <a href='/'>Back to check page</a>
    </center>
</body>
</html>