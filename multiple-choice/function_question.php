<?php
    $data=file('questions.txt') or die("Can not read file");
    //xóa phần tử đầu tiên: [0]id|question
    array_shift($data);
    
    $arrayQuestions=array();
    foreach($data as $key=>$value){
        $tmp=explode("|", $value); //tách chuỗi bởi ký tự |
        $id=$tmp[0];
        $question=$tmp[1];
        $arrayQuestions[$id]=array("question"=>$question);
    }
    // echo "<pre>";
    // print_r($arrayQuestions);
    // echo "</pre>";
?>