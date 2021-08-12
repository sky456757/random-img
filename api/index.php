<?php
//获取当前绝对路径
echo "1";
$path = dirname(__FILE__);
echo $path;
//读取文本文件
$file = file($path."/1.txt");
echo $file;
//随机选择一行作为url
$line = mt_rand(0, count($file)-1);
$url = trim($file[$line]);
echo $url;
?>