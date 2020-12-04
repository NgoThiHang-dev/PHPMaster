<?php
    $url="http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";

    //cách 1
    function getInfor01($url){
        $info=explode('/', $url);
        $result=$info[count($info)-1];
        return $result;
    }

    //cách 2
    function getInfor02($url){
        $arrayURL = parse_url($url);
        $info=explode("/", $arrayURL['path']);
        return $result=$info[count($info)-1];
    }

    //cách 3
    function getInfor03($url){
        $index=strripos($url, "/");
        $result=substr($url, $index+1);
        return $result;
    }
    
?>