<?php

/* 
	辣鸡 Bing 今日美图 API By Little_Qiu
	Version: 1.5
	感谢 @GPlane 和 @Flyfish233
*/

// 导入 PHP 版本检查模块检查 PHP 版本
include 'php_version.php';

// 输出 json
function json() {
	// 按照用户要求获取 json
	include 'json.php';
	// 将图片信息编码成数组
	$picinfo = array('date'=>$data['images'][0]['enddate'], 'url'=>$data['images'][0]['url']);
	// 生成 json
	$json = json_encode($picinfo);
	// 返回 json
	return $json;
}

// 输出 json
echo json();

?>