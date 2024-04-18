<meta charset="utf8">
<?php
$sTitle=$_POST["sTitle"];
$sName=$_POST["sName"];
$sEmail=$_POST["sEmail"];
$sComment = $_POST["sComment"];

echo"<table border='1'>";
echo"<tr><td>論文標題</td><td>{$sTitle}</td><tr/>";
echo"<tr><td>作者姓名</td><td>{$sName}</td><tr/>";
echo"<tr><td>作者Email</td><td>{$sEmail}</td><tr/>";
echo"<tr><td>你的意見</td><td>{$sComment}</td><tr/>";
echo"</table>";
echo"<br/><a href='logout.php'>登出</a>";

?>