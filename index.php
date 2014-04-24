<?php
$cookie_jar = dirname(__FILE__)."/pic.cookie";
$url2 = "http://aa.net/User/Login.aspx";
$post = "username=xxx&password=bb&expires=604800";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar);
//curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_jar);
$result=curl_exec($ch);
//echo $result;
curl_close($ch);

$url2 = "http://aa.net/Space.aspx";
$post = "";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_jar);
$result=curl_exec($ch);
echo $result;
curl_close($ch);
