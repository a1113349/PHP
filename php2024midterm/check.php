<meta charset="utf8">
<?php
session_start();
$cId="chair";
$cPwd="123";
$rId="reviewer";
$rPwd="234";
$aId="author";
$aPwd="345";
$uId=$_POST["uId"];
$uPwd=$_POST["uPwd"];
$date=strtotime("+7 days",time());
if($cId==$uId&&$cPwd==$uPwd){
    $_SESSION["check"]="Yes";
    setcookie("userName",$uId,$date);
    header("Location:chair.php");
}else if($rId==$uId&&$rPwd==$uPwd){
    $_SESSION["check"]="Yes";
    setcookie("userName",$uId,$date);
    header("Location:reviewer.php");
}else if($aId==$uId&&$aPwd==$uPwd){
    $_SESSION["check"]="Yes";
    setcookie("userName",$uId,$date);
    header("Location:author.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
?>