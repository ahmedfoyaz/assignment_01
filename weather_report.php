<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather report </title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h2>Weather Report</h2>
        <form action="" method="post">
            <input type="number" name="num" placeholder="Enter your temperature" id="">
            <button type="submit">Check</button>
        </form>
    <div id="result">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num=$_POST["num"];
    if($num<10){
        echo "It's freezing!";
    }
    elseif($num>10 && $num<25){
        echo "It's Cool";
    }
    elseif($num>25 && $num<45){
echo "It's Warming !";
    }
    else{
        echo "It's burning!";
    }

}
?>
    </div>
    </div>
</body>
</html>