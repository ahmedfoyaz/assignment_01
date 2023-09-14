<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>

<div class="container">
        <div class="row">
            <h2>Simple Temperature converter </h2>
            <form action="" method="post">
                <input type="number" name="num1" placeholder="Enter first Score" id="">
                <input type="number" name="num2" placeholder="Enter Second Score" id="">
                <input type="number" name="num3" placeholder="Enter Third Score" id="">
        
        <button type="submit">Calculate</button>
        </form>
        
        <div id="result">

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $num3=$_POST["num3"];
           $average=($num1+$num2+$num3)/3;
        //    $average=$sum/3;

            if($average>=81 && $average<=100){
                echo "Your grade A";
                echo "</br>";
                echo "Your average score is $average ";
            }
            elseif($average>=60 && $average<=80){
                echo "Your grade B";
                echo "</br>";
                echo "Your average score is $average ";
            }
            elseif($average>=50 && $average<=59){
                echo "Your grade C";
                echo "</br>";
                echo "Your average score is $average ";
            }
            elseif($average>=40 && $average<=49){
                echo "Your grade D";
                echo "</br>";
                echo "Your average score is $average ";
            }
            else{
                echo "Your grade F";
                echo "</br>";
                echo "Your average score is $average ";
            }
        }

        ?>
        
        </div>
        </div>
    </div>
    
</body>
</html>
