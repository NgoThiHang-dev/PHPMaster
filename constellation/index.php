<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Constellation</title>
</head>

<body>
    <?php
    $day = "";
    $mon = "";
    $image = "";
    $name = "";
    $time = "";
    $result="";

    if (isset($_POST["day"]) && isset($_POST["month"])) {
        $day = $_POST["day"];
        $mon = $_POST["month"];
        $flagshow = true;
        if (is_numeric($day) && is_numeric($mon)) {
            switch ($mon) {
                case 1:
                    if ($day <= 19) {
                        $image = "capricorn";
                        $name = "Ma Kết";
                        $time = "23/12 - 19/01";
                    }
                    if ($day >= 20) {
                        $image = "aquarius";
                        $name = "Bảo Bình";
                        $time = "20/01 - 19/02";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 2:
                    if ($day <= 19) {
                        $image = "aquarius";
                        $name = "Bảo Bình";
                        $time = "20/01 - 19/02";
                    }
                    if ($day >= 20) {
                        $image = "pisces";
                        $name = "Song Ngư";
                        $time = "20/02 - 21/03";
                    }
                    if ($day < 1 || $day > 29) $flagshow = false;
                    break;
                case 3:
                    if ($day <= 21) {
                        $image = "pisces";
                        $name = "Song Ngư";
                        $time = "20/02 - 21/03";
                    }
                    if ($day >= 22) {
                        $image = "aries";
                        $name = "Bạch Dương";
                        $time = "22/03 - 20/04";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 4:
                    if ($day <= 20) {
                        $image = "aries";
                        $name = "Bạch Dương";
                        $time = "22/03 - 20/04";
                    }
                    if ($day >= 21) {
                        $image = "taurus";
                        $name = "Kim Ngưu";
                        $time = "21/04 - 21/05";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 5:
                    if ($day <= 21) {
                        $image = "taurus";
                        $name = "Kim Ngưu";
                        $time = "21/04 - 21/05";
                    }
                    if ($day >= 20) {
                        $image = "genmini";
                        $name = "Song Tử";
                        $time = "22/05 - 22/06";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 6:
                    if ($day <= 22) {
                        $image = "genmini";
                        $name = "Song Tử";
                        $time = "22/05 - 22/06";
                    }
                    if ($day >= 23) {
                        $image = "cancer";
                        $name = "Cự Giải";
                        $time = "23/06 - 23/07";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 7:
                    if ($day <= 23) {
                        $image = "cancer";
                        $name = "Cự Giải";
                        $time = "23/06 - 23/07";
                    }
                    if ($day >= 24) {
                        $image = "leo";
                        $name = "Sư Tử";
                        $time = "24/07 - 23/08";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 8:
                    if ($day <= 23) {
                        $image = "leo";
                        $name = "Sư Tử";
                        $time = "24/07 - 23/08";
                    }
                    if ($day >= 24) {
                        $image = "virgo";
                        $name = "Xử Nữ";
                        $time = "24/08 - 23/08";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 9:
                    if ($day <= 23) {
                        $image = "virgo";
                        $name = "Xử Nữ";
                        $time = "24/08 - 23/08";
                    }
                    if ($day >= 24) {
                        $image = "libra";
                        $name = "Thiên Bình";
                        $time = "24/09 - 23/10";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 10:
                    if ($day <= 23) {
                        $image = "libra";
                        $name = "Thiên Bình";
                        $time = "24/09 - 23/10";
                    }
                    if ($day >= 24) {
                        $image = "scorpion";
                        $name = "Bò Cạp - Thần Nông";
                        $time = "24/10 - 22/11";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 11:
                    if ($day <= 22) {
                        $image = "scorpion";
                        $name = "Bò Cạp - Thần Nông";
                        $time = "24/10 - 22/11";
                    }
                    if ($day >= 20) {
                        $image = "sagittarius";
                        $name = "Nhân Mã";
                        $time = "23/11 - 22/12";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                case 12:
                    if ($day <= 22) {
                        $image = "sagittarius";
                        $name = "Nhân Mã";
                        $time = "23/11 - 22/12";
                    }
                    if ($day >= 23) {
                        $image = "capricorn";
                        $name = "Ma Kết";
                        $time = "23/12 - 19/01";
                    }
                    if ($day < 1 || $day > 31) $flagshow = false;
                    break;
                default:
                    $flagshow = false;
                    break;
            }
            if($flagshow==true){
                @$result = '<div class="result">
                        <img src="images/' . $image . '.jpg" alt="' . $image . '">
                        <p>' . $name . ' <span>(' . ucfirst($image) . ' : ' . $time . ')</span></p>
                    </div>';
            }else{
                $result="Dữ liệu không hợp lệ";
            }
        } else {
            $flagshow = false;
        }
    }
    ?>

    <div id="content">
        <h1>
            Bạn thuộc chòm sao gì?
        </h1>
        <form class="form" action="#" method="post">
            <div class="row">
                <span>Ngày sinh: </span>
                <input type="text" name="day" value="<?php echo $day; ?>" />
            </div>
            <div class="row">
                <span>Tháng sinh: </span>
                <input type="text" name="month" value="<?php echo $mon; ?>" />
            </div>
            <div class="row">
                <input type="submit" name="submit" value="Lấy chòm sao" />
            </div>
        </form>
        <?php
            echo $result;
        ?>
        <!-- <div class="result">
            <img src="images/<?php echo $image; ?>.jpg" alt="<?php echo $image; ?>">
            <p><?php echo $name; ?> <span>(<?php echo $image; ?>): <?php echo $time; ?></span></p>
        </div>
        <div class="result">
            <img src="images/capricorn.jpg" alt="capricorn">
            <p>ABN <span>(capricorn): 25</span></p>
        </div> -->
    </div>
</body>

</html>