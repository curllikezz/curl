<title>Wap Like By Vu Anh Tuan</title>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<title>Vip Like</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="http://stevendie.xtgem.com/css/style/themes/Style7/style.css" media="all,handheld"/>

<center><h1>Nhap ID</h1>
<br/>
<?php
session_start();

if(isset($_POST['zunwholiker'])) {
$token=$_POST['zunwholiker'];

$file = fopen('id.txt','w');
               fwrite($file,$token);
               fclose($file);
echo ' <font color="blue">thanh cong ..</font> <a href="cron.php"><font color="red">chay thu</font></a>

<hr>
<a href="/"><font color="red">ve trang chu </font></a><hr>
';
}else{
echo '
<center>ID Status/Photo/Album<br><form action="" method="POST">
<input type="text" name="zunwholiker"/><br>
<input type="submit" name="saveFile" value="Luu">
</form>
<br/><br/></center></body></html><noscript>
';
}
?>