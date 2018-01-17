<?php
//公用的方法
function show($status,$message,$data=array()){
	$reuslt =array(
		'status' =>$status,//状态值 0 1
		'message'=>$message,//消息 结果 提示内容
		'data'=>$data,//数组 username password等
	);
	//trim() 函数移除字符串两侧的空白字符或其他预定义字符。
	//对 JSON对象 格式的字符串进行编码 "name":"nihao"
	exit(json_encode($reuslt));
}
function getMd5Password($password)
{
	return md5($password . C('MD5_PRE'));
}

function getpage($count, $pagesize = 10) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
?>