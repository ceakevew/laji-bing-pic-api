<?php
 
/* 
	辣鸡 Bing 今日美图 API By Little_Qiu
	Version: 1.5
	感谢 @GPlane 和 @Flyfish233
*/
 
// 导入 PHP 版本检查模块检查 PHP 版本
include 'php_version.php';

// 获取 Bing 今日美图的图片地址
function bg() {
	// 检查是否使用 URL 指定时间并获取 JSON
	include 'json.php';
	// 返回 URL
    return "https://bing.com".$data['images'][0]['url'];
};

// 302 跳转
$url = bg();
header("Location: $url");
exit;
?>