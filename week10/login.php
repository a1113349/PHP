<html>
<head>
<meta charset="utf8">
</head>
<form action="check.php"method="get">
<center>
帳號:<input type="text" name="uId" value=""><br/>
密碼:<input type="password" name="uPwd"required><br/>

<br/>
<input type="submit"value="提交">
<br/>
</form>
<?php
//header("Refresh:1");
date_default_timezone_set("Asia/Taipei");
echo date("Y/m/d h:i:sa");
?>
</html>