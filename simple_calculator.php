<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Simple Basic Calculator</h2>
            <form action="" method="post">
                <input type="number" name="num1" placeholder="Enter Your First Number" id="">
                <input type="number" name="num2" placeholder="Enter Your Second Number" id="">
        <select name="operation" id="">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="binary">Binary</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        <button type="submit">Calculate</button>
        </form>
        <div id="result">

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $operation=$_POST["operation"];

            switch($operation){
                case "add":
                    $result=$num1+$num2;
                    echo "Result : $result";
                    break;
                case "subtract" :
                    $result=$num1-$num2;
                    echo "Result : $result";
                    break;
                case "multiply" :
                    $result=$num1*$num2;
                    echo "Result : $result";
                    break;
                    case "divide" :
                        if($num2 !=0){
                            $result=$num1/$num2;
                            echo "Result : $result";
                        }
                        else{
                            echo "Cannot divide by zero";
                        }
                      
                    break;
                    case "binary" :
                        echo "Binary : " .decbin($num1);
                        break;
                    case "octal" :
                        echo "Octal : ". decoct($num1);
                        break;
                    case "hexadecimal" :
                        echo "Hexadecimal : " . dechex($num1);
                        break;
            }
        }

        ?>


        </div>
        </div>
    </div>
</body>
</html>