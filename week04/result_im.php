<meta charset="utf8">
<?php
$sName=$_POST["sName"];
$sId=$_POST["sId"];
$sGrade=$_POST["sGrade"];
$sCity=$_POST["sCity"];
$sGender=$_POST["sGender"];
$sSize=$_POST["sSize"];
$sDate=$_POST["sDate"];
$sTime=$_POST["sTime"];
$sEmail=$_POST["sEmail"];
$sQuantity = $_POST["sQuantity"]; 
$sAct = $_POST["sAct"]; 
$sExpect = $_POST["sExpect"]; 
$sComment = $_POST["sComment"];

echo"<table border='1'>";
echo"<tr><td>你的名字</td><td>{$sName}</td><tr/>";
echo"<tr><td>你的年級</td><td>{$sGrade}</td><tr/>";
echo"<tr><td>你的學號</td><td>{$sId}</td><tr/>";
echo"<tr><td>住家市政區</td><td>{$sCity}</td><tr/>";
echo"<tr><td>性別</td><td>{$sGender}</td><tr/>";
echo"<tr><td>出生日期</td><td>{$sDate}</td><tr/>";
echo"<tr><td>出生時間</td><td>{$sTime}</td><tr/>";
echo"<tr><td>Email</td><td>{$sEmail}</td><tr/>";
echo"<tr><td>衣服數量</td><td>{$sQuantity}</td><tr/>";
echo "<tr><td>衣服尺寸</td><td>";
foreach($sSize as $value){
    echo"{$value}";;
}
echo "</td></tr>";
echo "<tr><td>得知管道</td><td>";
$count = count($sAct);

// 循环输出所有选项
for ($i = 0; $i < $count; $i++) {
    if ($i < $count - 1) {
        echo $sAct[$i] . "  ";
    } else {
        echo $sAct[$i];
    }
}

echo "</td></tr>";
echo"<tr><td>對於該活動期待指數</td><td>{$sExpect}%</td><tr/>";
echo"<tr><td>你的意見</td><td>{$sComment}</td><tr/>";
echo"</table>";

?>