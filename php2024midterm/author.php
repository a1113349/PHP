<meta charset="utf8">
<?php
session_start();
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="No"){
        echo"非法進入該網頁<br/>";
        echo"3秒鐘之後回登入畫面";
        header("Refresh:3;url=index.php");
    }
}else{
    echo"非法進入該網頁"; 
    header("Refresh:3;url=index.php");
}
?>
<html>
<head>
<meta charset="utf8">
</head>
<form action="showpaper.php"method="post">
<h1>Author您好，歡迎進入論文投稿網頁</h1><br/>
論文標題:<input type="text" name="sTitle" value=""><br/>
作者姓名:<input type="text" name="sName" value=""required><br/>
作者Email:<input type="email"name="sEmail"value=""><br/>
請輸入你的意見:
<textarea name="sComment"value=""rows="10"cols="50">
</textarea>
<br/>
<input type="submit"value="提交">
<br/>



</form>

</html>
