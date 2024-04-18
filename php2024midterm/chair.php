<meta charset="utf8">
<?php
session_start();
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo"歡迎進入該網頁<br/>";
        echo"<a href='logout.php'>登出</a>";
    }else{
        echo"非法進入該網頁<br/>";
        echo"3秒鐘之後回登入畫面";
        header("Refresh:3;url=index.php");
    }
}else{
    echo"非法進入該網頁"; 
    header("Refresh:3;url=index.php");
}
?>