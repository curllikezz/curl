<meta charset="UTF-8">
<?php
if($_GET['id'])
{
file_put_contents('idlike.txt', ''.$_GET['id'].'');
}
echo file_get_contents("idlike.txt");  
?>
<form action="napid.php">  
  ID Mới : <input type="text" name="id"><br>
  <input type="submit" value="Submit">
</form>