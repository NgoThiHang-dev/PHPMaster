<?php
    $url="http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";

    function getInfor03($url){
        $index=strripos($url, "/");
        $result=substr($url, $index+1);
        return $result;
    }

    $info=getInfor03($url);
    $result=array();
    $arrayInfo=explode("_", $info);

    //ID
    $result["id"]=$arrayInfo[0];


    //type
    $arrType=explode(".", $arrayInfo[3]);
    $result["type"]=$arrType[1];

    //name, audio, singer
    $arrayInfo[3]=$arrType[0];

    function format($str){
        $result=$str[0];
        //cắt chuỗi nếu chữ tiếp theo là chữ viết hoa thì thêm khoảng cách trắng, nếu chữ viết thường thì viết tiếp
        for($i=1; $i<strlen($str); $i++){
            if(ctype_upper($str[$i])==true){
                $result .= " ".$str[$i];
            }else{
                $result .= $str[$i];
            }
        }
        return $result;
    }

    $result["name"]=format($arrayInfo[1]);
    $result["album"]=format($arrayInfo[2]);
    $result["singer"]=format($arrayInfo[3]);
    

    function show_array($data) {
        if (is_array($data)) {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    // echo $result['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lấy thông tin từ URL</title>
</head>
<body>
    <!-- <h1>Thông tin</h1> -->

</body>
</html>

