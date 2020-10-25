<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>

<body>
    <?php
    $n1 = "";
    $n2 = "";
    $calculator = "";
    if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["calculator"])) {
        $n1 = $_POST["number1"];
        $n2 = $_POST["number2"];
        $flag= true;
        $calculator = $_POST["calculator"];
        if(is_numeric($n1) && is_numeric($n1)){
            switch ($calculator) {
                case "+":
                    $result = $n1 + $n2;
                    break;
                case "-":
                    $result = $n1 - $n2;
                    break;
                case "*":
                case "x":
                    $result = $n1 * $n2;
                    break;
                case "/":
                case ":":
                    $result = $n1 / $n2;
                    break;
                case "%":
                    $result = $n1 % $n2;
                    break;
                default:;
                    break;
            }
        }else{
            $result="Lỗi cú pháp";
            $flag=false;
        }
        
    }

    ?>
    <div id="content">
        <h1>Mô phỏng máy tính điện tử</h1>
        <form action="#" method="POST" name="main-form">
            <div class="row">
                <span>Số thứ nhất: </span>
                <input type="text" name="number1" value="<?php echo $n1; ?>" />
            </div>
            <div class="row">
                <span>Phép toán: </span>
                <input type="text" name="calculator" value="<?php echo $calculator; ?>" />
            </div>
            <div class="row">
                <span>Số thứ hai: </span>
                <input type="text" name="number2" value="<?php echo $n2; ?>" />
            </div>
            <div class="row">
                <input type="submit" name="xemkq" />
            </div>
            <div class="row">
                <p style="color: brown; text-align:center">
                    <?php 
                        if(@$flag==true){
                            echo "Kết quả: ". $n1 . " " . $calculator . " " . $n2 . " = " . $result;
                        }
                        else{
                            echo @$result;
                        }
                    ?>
                </p>
            </div>
        </form>
    </div>
</body>

</html>