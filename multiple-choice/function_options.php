<?php
    $data=file('options.txt') or die("Can not read file");
    //xóa phần tử đầu tiên: [0]id|question
    array_shift($data);
    
    $arrOptions=array();
    foreach($data as $key=>$value){
        $tmp=explode("|", $value);
        $questionID=$tmp[0];
        $optionID=$tmp[1];
        $answer=$tmp[2];
        $point=$tmp[3];

        $arrOptions[$questionID][$optionID]["options"]=$answer;
        $arrOptions[$questionID][$optionID]["point"]=$point;
    }
    // echo "<pre>";
    // print_r($arrOptions);
    // echo "</pre>";
?>