<meta charset='utf8'>
<?php
// 確認表單提交後才執行更新操作
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 取得表單提交的數據
    $Name = $_POST["uName"];
    $Grade = $_POST["uGrade"];
    $Id = $_POST["uId"];
    $City = $_POST["sCity"];
    $Gender = $_POST["sGender"];
    $Date = $_POST["sDate"];
    $Time = $_POST["sTime"];
    $Email = $_POST["sEmail"];
    $Color = $_POST["sColor"];
    $Quantity = $_POST["sQuantity"];
    $Size = $_POST["sSize"];
    $Act = isset($_POST["sAct"]) ? implode(", ", $_POST["sAct"]) : "";
    $Expect = $_POST["sExpect"];
    $Comment = $_POST["sComment"];

    // 建立資料庫連接
    $link = mysqli_connect('localhost', 'root', '', 'mydatabase');

    // 檢查連接是否成功
    if (!$link) {
        die("連接資料庫失敗: " . mysqli_connect_error());
    }

    // 構建 SQL 更新語句，這裡假設 sId 是唯一識別列
    $SQL = "UPDATE registration SET sName='$Name', sGrade='$Grade', sCity='$City', sGender='$Gender', sDate='$Date', sTime='$Time', sEmail='$Email', sColor='$Color', sQuantity='$Quantity', sSize='$Size', sAct='$Act', sExpect='$Expect', sComment='$Comment' WHERE sId='$Id'";

    // 執行 SQL 查詢
    if ($result = mysqli_query($link, $SQL)) {
        // 檢查是否有行受影響
        if (mysqli_affected_rows($link) > 0) {
            echo "更新成功<br>";
        } else {
            echo "沒有找到符合條件的記錄，更新失敗<br>";
        }
    } else {
        echo "更新失敗: " . mysqli_error($link);
    }

    // 關閉資料庫連接
    mysqli_close($link);
}
echo "<br/><a href='index1.php'>查看資料庫資料</a>";
?>



