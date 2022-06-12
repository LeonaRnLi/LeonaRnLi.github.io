<?php
include_once("mail.inc.php");
$smtp = new smtp("smtp.163.com",25,true,"111@163.com","222","111@163.com");//发件人信箱信息
$smtp->debug = false;//是否显示发送的调试信息 FALSE or TRUE
$mailto="251272031@qq.com";//收件人信箱
$mailsubject="web Message";
$mailfrom="Web Visitor";
$mailbody="Name=".$_POST["Name"]."<br>";
$mailbody=$mailbody."email=".$_POST["Email"]."<br>";
$mailbody=$mailbody."Message=".$_POST["body"]."<br>";
//其他的表单项目以此类推
$mailtype 		= 	"HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
$mailsubject 	= 	'=?UTF-8?B?'.base64_encode($mailsubject).'?=';//邮件主题
$mailfrom  	= 	'=?UTF-8?B?'.base64_encode($mailfrom).'?=';//发件人
$smtp->sendmail($mailto, $mailfrom, $mailsubject, $mailbody, $mailtype);
echo "<script language=\"JavaScript\">alert(\"Send success.\");</script>"; exit();
?>