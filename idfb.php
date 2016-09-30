<title>Wap Like By Vu Anh Tuan</title>
<html>
<head>
<title>Vip Like</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="http://stevendie.xtgem.com/css/style/themes/Style7/style.css" media="all,handheld"/>

<center><h1>Nhap ID FACEBOOK</h1>
<br/>
<?php
session_start();

if(isset($_POST['zunwholiker'])) {
$token=$_POST['zunwholiker'];

$file = fopen('idfb.txt','w');
               fwrite($file,$token);
               fclose($file);
echo ' <font color="blue">thanh cong ..</font> <a href="cron.php"><font color="red">xem thu</font></a>

<hr>
<a href="/1/"><font color="red">ve trang chu </font></a><hr>
';
}else{
echo '
<center>ID auto like<br><form action="" method="POST">
<input type="text" name="zunwholiker"/><br>
<input type="submit" name="saveFile" value="Luu">
</form>
<br/><br/></center></body></html><noscript>
';
}
?>