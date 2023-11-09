<?php
echo $_GET["num1"];
echo "<br>";
echo $_GET["num2"];
echo "<br>";
echo $_GET["num1"] + $_GET["num2"];
echo "<br>";
echo $_GET["num1"] * $_GET["num2"];
$result=$_GET["num1"] + $_GET["num2"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class ="container">

    <form action"calc.php" method="GET">
        <div>
            <label>enter a number:

            </label>
            <input type="number" name="num1">
            <div></div>
            <div>

            <label>enter a number:</label>
            <input type="number" name="num2">
            <br>
            <input type="submit">
            </div>
            <div>
                <?php echo $result; ?>
            </div>


        </div>

    
</body>
</html>