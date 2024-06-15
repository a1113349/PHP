<meta charset='utf8'>

<?php
//連接資料庫
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'mydatabase');

if (!$link) {
    die("無法開啟資料庫<br>");
} else {
    echo "成功開啟資料庫<br>";
}

//SQL語法
$SQL = "SELECT * FROM registration";

//送出查詢
$result = mysqli_query($link, $SQL);

//結果轉陣列、以表格呈現
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["sName"] . "</td>";
    echo "<td>" . $row["sGrade"] . "</td>";
    echo "<td>" . $row["sId"] . "</td>";
    echo "<td>" . $row["sCity"] . "</td>";
    echo "<td>" . $row["sGender"] . "</td>";
    echo "<td>" . $row["sDate"] . "</td>";
    echo "<td>" . $row["sTime"] . "</td>";
    echo "<td>" . $row["sEmail"] . "</td>";
    echo "<td>" . $row["sFile"] . "</td>";
    echo "<td>" . $row["sColor"] . "</td>";
    echo "<td>" . $row["sQuantity"] . "</td>";
    echo "<td>" . $row["sSize"] . "</td>";
    echo "<td>" . $row["sAct"] . "</td>";
    echo "<td>" . $row["sExpect"] . "</td>";
    echo "<td>" . $row["sComment"] . "</td>";
    echo "<td><a href='del1.php?sId=" . $row["sId"] . "'>刪除</a></td>";
    echo "<td><a href='update1.php?sId=" . $row["sId"] ."'>修改</a></td></tr>";
}
echo "</table>";

mysqli_close($link);
?>