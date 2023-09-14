<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    <div class="container">
        <h2>Even Or Oddd Number Checker</h2>
        <form action="" method="post">
            <input name="num" id="" type="number" placeholder="Enter Your Number"></input>


            <button type="submit">Check</button>
        </form>

        <div id="result">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num=$_POST["num"];
    if($num%2==0){
        echo "$num is an Even Number";
    }
    else{
        echo "$num is an Odd Number";
    }
}
?>
        </div>
    </div>
</body>
</html>