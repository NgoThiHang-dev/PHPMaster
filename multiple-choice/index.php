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
        require_once 'function_question.php';
        require_once 'function_options.php';

        $newArr=array();
        foreach($arrayQuestions as $key=>$value){
            $newArr[$key]["question"]=$value["question"];
            $newArr[$key]["sentences"]=$arrOptions[$key];
        }

    ?>
    <div id="content">
        <h1>Trắc nghiệm tính cách</h1>
        <form action="result.php" method="POST" name="mainForm">
            <?php
                $i=1;
                foreach($newArr as $key =>$value){
                    echo '<div class="question">';
                    echo '<p><b>Câu hỏi '.$i.': </b>'.$value["question"].'</p>';
                    echo '<ul>';
                    foreach($value["sentences"] as $keyC => $valueC){
                        echo '<li><label for=""><input type="radio" name="'.$key.'" value="'.$valueC["point"].'"> '.$valueC["options"].'</label></li>';
                    }
                    echo '</ul>';
                    $i++;
                }
            ?>
            <!-- <div class="question">
                <p><b>Câu hỏi 1: </b>Bạn cảm thấy dễ chịu nhất khi nào?</p>
                <ul>
                    <li><label for=""><input type="radio" name="1" value="2"> Vào buổi sáng</label></li>
                    <li><label for=""><input type="radio" name="1" value="2"> Vào buổi chiều và chớm tối</label></li>
                    <li><label for=""><input type="radio" name="1" value="2"> Vào đêm muộn</label></li>
                </ul>
            </div> -->
            
            <input type="submit" value="Kiểm tra" name="submit" />
        </form>
    </div>
</body>
</html>