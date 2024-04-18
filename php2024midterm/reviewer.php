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
<form action="showreview.php"method="post">
<h1>Reviewer您好，歡迎進入論文評論網頁</h1>
論文評審決定:
<input type="radio"name="sDecide"value="Accept"checked>Accept
<input type="radio"name="sDecide"value="Minor Revision">Minor Revision
<input type="radio"name="sDecide"value="Major Revision">Major Revision
<input type="radio"name="sDecide"value="Reject">Reject
<br/>
論文評審評語:
<textarea name="sComment"value=""rows="10"cols="50">
</textarea>
<br/>
<input type="submit"value="提交">
<br/>
</form>
</html>