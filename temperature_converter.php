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
                <input type="number" name="num1" placeholder="Enter Your temperature" id="">
        <select name="operation" id="">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit"> Fahrenheit </option>
         
        </select>
        <button type="submit">Convert</button>
        </form>
        
        <div id="result">

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1=$_POST["num1"];
            $operation=$_POST["operation"];

            switch($operation){
                case "celsius":
                    $celsius=5/9*($num1-32);
                    echo "Celsius: $celsius";
                    break;
                case "fahrenheit" :
                    $fahrenheit=$num1*9/5+32;
                    echo "Result : $fahrenheit";
                    break;
                 
            }
        }

        ?>


        </div>
        </div>
    </div>
    
</body>
</html>
