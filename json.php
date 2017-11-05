<?php

/* 
    辣鸡 Bing 今日美图 API-PHP 版本检查模块 By Little_Qiu
    Version 1.0
    感谢 @GPlane
*/

// 导入设置
include "settings.php";

// 检查是否使用 URL 指定时间
if ($useUrl) {
    // 获取 daysago 参数的值
    $daysAgo = "$_GET[daysago]";
};

// 获取 JSON
$data = json_decode(file_get_contents("http://bing.com/HPImageArchive.aspx?format=js&idx=$daysAgo&n=1"), true);

?>