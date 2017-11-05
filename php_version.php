<?php

/* 
    辣鸡 Bing 今日美图 API-PHP 版本检查模块 By Little_Qiu
    Version 1.0
*/

// 检查 PHP 版本
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
    exit('错误：辣鸡 Bing 今日美图 API 要求 PHP 版本不低于 5.2.0，你正在使用的是 '.PHP_VERSION);
}

?>