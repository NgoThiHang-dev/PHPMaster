<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ATM</title>
</head>

<body>
    <div id="content">
        <?php
        $money = 0;
        if (isset($_POST["money"]))
            $money = $_POST["money"];
        ?>
        <div class="wp-content">
            <div class="info">
                <img src="images/atm.png" alt="">

            </div>
            <div class="contener">
                <h1>Mô phỏng máy ATM</h1>
                <h4>Vui lòng nhập số tiền khách muốn giao dịch</h4>
                <form action="" method="post">
                    <div class="row">
                        <input type="number" name="money" value="<?php echo number_format($money); ?>">
                        <input type="submit" name="submit" value="rút tiền" id="">
                    </div>
                </form>
            </div>
        </div>

        <?php
        define("ONE", 1000);
        define("TWO", 2000);
        define("FIVE", 5000);
        define("ONE_0", 10000);
        define("TWO_0", 20000);
        define("FIVE_0", 50000);
        define("ONE_00", 100000);
        define("TWO_00", 200000);
        define("FIVE_00", 500000);

        $five00 = 0;
        $two00 = 0;
        $one00 = 0;
        $five0 = 0;
        $two0 = 0;
        $one0 = 0;
        $five = 0;
        $two = 0;
        $one = 0;

        $flag_show = false;


        if (is_numeric($money) && $money > 1000) {
            $flag_show = true;
            while ($money >= FIVE_00) {
                $five00 += 1;
                $money = $money - FIVE_00;
            }
            while ($money >= TWO_00) {
                $two00 += 1;
                $money = $money - TWO_00;
            }
            while ($money >= ONE_00) {
                $one00 += 1;
                $money = $money - ONE_00;
            }
            while ($money >= FIVE_0) {
                $five0 += 1;
                $money = $money - FIVE_0;
            }
            while ($money >= TWO_0) {
                $two0 += 1;
                $money = $money - TWO_0;
            }
            while ($money >= ONE_0) {
                $one0 += 1;
                $money = $money - ONE_0;
            }

            while ($money >= FIVE) {
                $five += 1;
                $money = $money - FIVE;
            }
            while ($money >= TWO) {
                $two += 1;
                $money = $money - TWO;
            }
            while ($money >= ONE) {
                $one += 1;
                $money = $money - ONE;
            }
            

            $total = ($five00 * FIVE_00) + ($two00 * TWO_00) + ($one00 * ONE_00) +
                ($five0 * FIVE_0) + ($two0 * TWO_0) + ($one0 * ONE_0) +
                ($five * FIVE) + ($two * TWO) + ($one * ONE);
        }
        ?>
        <div class="result">
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Mệnh giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        //neu so tien lon hon 500.000đ
                        if ($five00 > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(FIVE_00) . '</td>
                                    <td>' . $five00 . '</td>
                                    <td>' . number_format(FIVE_00 * $five00) . '</td>
                                </tr>';
                        }
                        //neu so tien lon hon 200.000đ
                        if ($two00 > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(TWO_00) . '</td>
                                    <td>' . $two00 . '</td>
                                    <td>' . number_format(TWO_00 * $two00) . '</td>
                                </tr>';
                        }
                        //neu so tien lon hon 100.000đ
                        if ($one00 > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(ONE_00) . '</td>
                                    <td>' . $one00 . '</td>
                                    <td>' . number_format(ONE_00 * $one00) . '</td>
                                </tr>';
                        }

                        //neu so tien lon hon 50.000đ
                        if ($five0 > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(FIVE_0) . '</td>
                                    <td>' . $five0 . '</td>
                                    <td>' . number_format(FIVE_0 * $five0) . '</td>
                                </tr>';
                        }
                        //neu so tien lon hon 20.000đ
                        if ($two0 > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(TWO_0) . '</td>
                                    <td>' . $two0 . '</td>
                                    <td>' . number_format(TWO_0 * $two0) . '</td>
                                </tr>';
                        }
                        //neu so tien lon hon 10.000đ
                        if ($one0 > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(ONE_0) . '</td>
                                    <td>' . $one0 . '</td>
                                    <td>' . number_format(ONE_0 * $one0) . '</td>
                                </tr>';
                        }

                        //neu so tien lon hon 5.000đ
                        if ($five > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(FIVE) . '</td>
                                    <td>' . $five . '</td>
                                    <td>' . number_format(FIVE * $five) . '</td>
                                </tr>';
                        }
                        //neu so tien lon hon 2.000đ
                        if ($two > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(TWO) . '</td>
                                    <td>' . $two . '</td>
                                    <td>' . number_format(TWO * $two) . '</td>
                                </tr>';
                        }
                        //neu so tien lon hon 1.000đ
                        if ($one > 0) {
                            echo
                                '<tr>
                                    <td>' . number_format(ONE) . '</td>
                                    <td>' . $one . '</td>
                                    <td>' . number_format(ONE * $one) . '</td>
                                </tr>';
                        }

                       

                        ?>
                        <!-- <tr>
                            <td>500.000</td>
                            <td>6</td>
                            <td>3.000.000</td>
                        </tr> -->
                    </tbody>
                </table>
                <hr>

                <?php
                if ($flag_show == true) {
                    echo '<p style="margin-top: 5px;">Tổng tiền: ' . number_format($total) . ' </p>';
                }
                ?>

            </div>
        </div>
    </div>

</body>

</html>