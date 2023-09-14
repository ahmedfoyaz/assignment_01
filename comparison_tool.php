<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison tool</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    <div class="container">
        <h2>Determine the larger Number</h2>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Enter the first number" id="">
            <input type="number" name="num2" placeholder="Enter the second number" id="">

            <button type="submit">Check</button>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $larger_number = $num1 > $num2 ? " $num1 is larger then $num2 "  : "$num2 is larger then $num1";
            echo $larger_number;
        }
        ?>
    </div>
</body>
</html>
