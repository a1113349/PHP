<meta charset="utf8">
<?php
$sDecide=$_POST["sDecide"];
$sComment = $_POST["sComment"];
echo"<table border='1'>";
echo"<tr><td>論文評審決定</td><td>{$sDecide}</td><tr/>";
echo"<tr><td>論文評審評語</td><td>{$sComment}</td><tr/>";
echo"</table>";
echo"<br/><a href='logout.php'>登出</a>";

?>