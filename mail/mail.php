<?php
if(!empty($_POST))
{
 
$name = 'Name: '.$_POST[name]."\n";
$email = 'E-mail: '.$_POST[email]."\n";
$guest = "Guest's Name: ".$_POST[guest]."\n";
$attending = '#Attending: '.$_POST[attending]."\n";

 
$ip = getRealIpAddr();
$message = "$name$email$guest$attending\n\nFrom page: ".urldecode($_SERVER['HTTP_REFERER'])."\nIP: $ip\nBrowser: ".$_SERVER['HTTP_USER_AGENT']."\n";
$error = array();

 
if(empty($error))
{ 
$mail =
mail("alankarrocks@mail.com", "$title", $message,
 "From: alankarrocks@mail.com\r\n"
."Reply-To: alankarrocks@mail.com\r\n"
."Content-type:text/plain;charset=utf-8\r\n"
."X-Mailer: PHP/" . phpversion());

}
}
 
function getRealIpAddr() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip=$_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
                $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
}
 
 ?>
