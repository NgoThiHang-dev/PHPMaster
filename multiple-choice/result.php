<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trắc nghiệm tính cách</title>
</head>
<body>
    <?php
        $data = file("questions.txt") or die("Can not read file");
        $point=0;
        array_shift($data);

        foreach($data as $key => $value){
            $tmpArr = explode("|", $value);
            $id=$tmpArr[0];
            $point = $point + (int)$_POST[$id];
        }
        
        $data = file("result.txt") or die("Can not read file");
        array_shift($data);

        foreach($data as $key => $value){
            $tmpArr = explode("|", $value);
            $min=$tmpArr[0];
            $max=$tmpArr[1];
            $content=$tmpArr[2];

            if($point>=$min &&$point <=$max){
                $result=$content;
                break;
            }
        }
        
    ?>
    <div id="content">
        <h1>Kết quả trắc nghiệm tính cách</h1>
        <p><b>Tổng điểm của bạn là:</b> <?php echo $point; ?></p>
        <p style="text-align: justify;"><b>Kết quả trắc nghiệm của bạn:</b><br> <?php echo $result; ?></p>
    </div>
</body>
</html>