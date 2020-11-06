<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Triangle Star</title>
</head>

<body>
    <?php
    $n = 6;
    $flat = true;
    $result = "";
    $checked1="checked";
    $checked2="";
    $checked3="";
    if (isset($_GET["loop"])) {
        # code...
        $url = $_SERVER["REQUEST_URI"];
        // echo "Đây là URL hiện tại của bạn: http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        list($local, $ur) = explode("?", $url);
        list($loop, $number, $types) = explode("&", $ur);
        list($type) = explode(".", $types);
        if (isset($_GET["number"])) {
            # Xử lý chức năng vẽ tam giác
            $n = $_GET["number"];
            if (is_numeric($n)) {
                switch ($_GET["loop"]) {
                        //Vòng lặp for
                    case "for":
                        $checked1="checked";
                        if ($type == "type1") {
                            for ($i = 1; $i <= $n; $i++) {
                                $result .= str_repeat("*", $i) . "<br />";
                            }
                        }
                        if ($type == "type2") {
                            for ($i = $n; $i >= 1; $i--) {
                                $result .= str_repeat("*", $i) . "<br />";
                            }
                        }
                        if ($type == "type3") {
                            for ($i = 1; $i <= $n; $i++) {
                                $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                                $character = str_repeat("*", 2 * $i - 1);
                                $result .= $space . $character . '<br />';
                            }
                        }
                        break;
                        //Vòng lặp while
                    case "while":
                        $checked2="checked";
                        if ($type == "type1") {
                            $i = 1;
                            while ($i <= $n) {
                                $result .= str_repeat("*", $i) . "<br />";
                                $i++;
                            }
                        }
                        if ($type == "type2") {
                            $i = $n;
                            while ($i >= 1) {
                                $result .= str_repeat("*", $i) . "<br />";
                                $i--;
                            }
                        }
                        if ($type == "type3") {
                            $i = 1;
                            while ($i <= $n) {
                                $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                                $character = str_repeat("*", 2 * $i - 1);
                                $result .= $space . $character . '<br />';
                                $i++;
                            }
                        }
                        break;

                        //Vòng lặp do..while
                    case "do..while":
                        $checked3="checked";
                        if ($type == "type1") {
                            $i = 1;
                            do {
                                $result .= str_repeat("*", $i) . "<br />";
                                $i++;
                            } while ($i <= $n);
                        }

                        if ($type == "type2") {
                            $i = $n;
                            do {
                                $result .= str_repeat("*", $i) . "<br />";
                                $i--;
                            } while ($i >= 1);
                        }
                        if ($type == "type3") {
                            $i = 1;
                            do {
                                $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                                $character = str_repeat("*", 2 * $i - 1);
                                $result .= $space . $character . '<br />';
                                $i++;
                            } while ($i <= $n);
                        }
                        break;
                    default:

                        break;
                }
            } else {
                $flat = false;
            }
        }
    }
    ?>

    <div id="content">
        <h1>Vẽ tam giác</h1>
        <form method="get" action="">
            <h5>Chọn vòng lặp:</h5>
            <div class="row">
                <input type="radio" id="1" name="loop" value="for" <?php echo $checked1;?>>
                <label for="1">for</label>
            </div>
            <div class="row">
                <input type="radio" id="2" name="loop" value="while" <?php echo $checked2;?>>
                <label for="2">while</label>
            </div>
            <div class="row">
                <input type="radio" id="3" name="loop" value="do..while" <?php echo $checked3;?>>
                <label for="3">do..while</label>
            </div>
            <div class="row" style="margin-top: 10px;">
                <label>Số hàng: </label>
                <input type="text" placeholder="6" name="number" value="<?php echo $n; ?>">
            </div>
            <h5>Chọn mẫu tam giác:</h5>
            <div class="row">
                <div class="type">
                    <input type="image" name="type1" value="type" src="images/img1.png">
                    <input style="margin: 0px 40px;" type="image" name="type2" value="type2" src="images/img2.png">
                    <input type="image" name="type3" value="type3" src="images/img3.png">
                    <!-- <ul>
                        <li><a href="index.php?type=1"><img src="images/img1.png" alt=""></a></li>
                        <li><a href="index.php?type=2"><img src="images/img2.png" alt=""></a></li>
                        <li><a href="index.php?type=3"><img src="images/img3.png" alt=""></a></li>
                    </ul> -->
                </div>
            </div>
        </form>
        <div class="result">
            <p>Kết quả: </p>
            <h4>
                <?php
                echo $result;
                ?>
            </h4>
        </div>
    </div>
</body>

</html>