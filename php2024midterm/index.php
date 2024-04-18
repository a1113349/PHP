<html>
<head>
<meta charset="utf8">
<?php
include("include.inc");
?>
</head>
<form action="check.php"method="post">
<h1>高大資管論文投稿系統</h1>
請選擇角色:<select name="uActor[]">
<option value="Chair">Chair
<option value="Reviewer">Reviewer
<option value="Author">Author
</select>
<br/>
帳號:<input type="text" name="uId" value=""><br/>
密碼:<input type="password" name="uPwd"required><br/>

<br/>
<input type="submit"value="提交">
<?php
if(isset($_COOKIE["userName"])){
    echo"<br/>";
    echo $_COOKIE["userName"]."歡迎回來";
}else{
    echo"<br/>";
    echo"這是你第一次進入該網站";
}
?>
<br/>
</form>
<?php
ob_flush();//緩衝區
?>
</html>