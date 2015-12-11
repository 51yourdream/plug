<?php
/**
 * @Author: lipeng
 * @Date:   2015-12-09 21:56:18
 * @Last Modified by:   lipeng
 * @Last Modified time: 2015-12-09 21:58:35
 */
date_default_timezone_set("PRC");
require './Cookies.class.php';
// 把用户名保存在cookie中
$username = $_GET['username'];
$Cookies = new Cookies();
$Cookies->set('username',$username);
echo $Cookies->get('username');

var_dump($_REQUEST);
var_dump($_COOKIE);