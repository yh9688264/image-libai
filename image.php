<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,14);
//拼接图片地址
//https://raw.githubusercontent.com/yh9688264/image-libai/14608aaf6d31e87827f3cb109fa02ebc5013edd3/head/1.png
$picpath = "https://raw.githubusercontent.com/yh9688264/image-libai/14608aaf6d31e87827f3cb109fa02ebc5013edd3/head/".$num.".jpg";
//重定位到图片
die(header("Location: $picpath"));
?>