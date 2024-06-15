<meta charset='utf8'>
<?php
// 连接数据库
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'mydatabase'
);

if (!$link) {
    die("資料庫連接失敗: " . mysqli_connect_error());
}

// 檢查是否有 sId 被傳遞進來
if (isset($_GET['sId'])) {
    $sId = $_GET['sId'];

    // 構建 SQL 查詢
    $SQL = "SELECT * FROM registration WHERE sId='$sId'";

    // 執行查詢
    $result = mysqli_query($link, $SQL);

    if ($result) {
        // 檢查是否有查詢到結果
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $sName = $row["sName"];
            $sGrade = $row["sGrade"];
            $sId = $row["sId"];
            $sCity = $row["sCity"];
            $sGender = $row["sGender"];
            $sDate = $row["sDate"];
            $sTime = $row["sTime"];
            $sEmail = $row["sEmail"];
            $sColor = $row["sColor"];
            $sQuantity = $row["sQuantity"];
            $sSize = $row["sSize"]; // 假設只有一個尺寸
            $sAct = $row["sAct"];
            $sExpect = $row["sExpect"];
            $sComment = $row["sComment"];
        } else {
            echo "未找到符合的紀錄";
        }
    } else {
        echo "查詢失敗: " . mysqli_error($link);
    }
} else {
    echo "缺少 sId 參數";
}
mysqli_close($link);
?>

<form action="updatecheck1.php" method="post">
    姓名: <input type="text" name="uName" value="<?php echo isset($sName) ? $sName : ''; ?>"><br/>
    年級: <input type="text" name="uGrade" value="<?php echo isset($sGrade) ? $sGrade : ''; ?>"><br/>
    學號: <input type="text" name="uId" value="<?php echo isset($sId) ? $sId : ''; ?>"><br/>
    住家市政區: <input type="text" name="sCity" value="<?php echo isset($sCity) ? $sCity : ''; ?>"><br/>
    性別: <input type="text" name="sGender" value="<?php echo isset($sGender) ? $sGender : ''; ?>"><br/>
    出生日期: <input type="date" name="sDate" value="<?php echo isset($sDate) ? $sDate : ''; ?>"><br/>
    時間: <input type="time" name="sTime" value="<?php echo isset($sTime) ? $sTime : ''; ?>"><br/>
    Email: <input type="email" name="sEmail" value="<?php echo isset($sEmail) ? $sEmail : ''; ?>"><br/>
    衣服顏色: <input type="color" name="sColor" value="<?php echo isset($sColor) ? $sColor : ''; ?>"><br/>
    我要幾件衣服: <input type="number" name="sQuantity" value="<?php echo isset($sQuantity) ? $sQuantity : ''; ?>"><br/>
    請輸入衣服尺寸:
    <select name="sSize">
        <option value="S" <?php echo isset($sSize) && $sSize == 'S' ? 'selected' : ''; ?>>S</option>
        <option value="M" <?php echo isset($sSize) && $sSize == 'M' ? 'selected' : ''; ?>>M</option>
        <option value="L" <?php echo isset($sSize) && $sSize == 'L' ? 'selected' : ''; ?>>L</option>
        <option value="XL" <?php echo isset($sSize) && $sSize == 'XL' ? 'selected' : ''; ?>>XL</option>
    </select><br/>
    如何得知該活動(可複選):<br/>
    <input type="checkbox" name="sAct[]" value="同學告知" <?php echo isset($sAct) && strpos($sAct, '同學告知') !== false ? 'checked' : ''; ?>> 同學告知<br/>
    <input type="checkbox" name="sAct[]" value="廣告告知" <?php echo isset($sAct) && strpos($sAct, '廣告告知') !== false ? 'checked' : ''; ?>> 廣告告知<br/>
    <input type="checkbox" name="sAct[]" value="老師宣傳" <?php echo isset($sAct) && strpos($sAct, '老師宣傳') !== false ? 'checked' : ''; ?>> 老師宣傳<br/>
    <input type="checkbox" name="sAct[]" value="其他" <?php echo isset($sAct) && strpos($sAct, '其他') !== false ? 'checked' : ''; ?>> 其他<br/>
    該活動期待的百分比: <input type="range" name="sExpect" value="<?php echo isset($sExpect) ? $sExpect : ''; ?>"><br/>
    你的意見: <br/>
    <textarea name="sComment" rows="10" cols="50"><?php echo isset($sComment) ? $sComment : ''; ?></textarea><br/>
    請選擇檔案:<input type="file"name="myFile"><br/>
    <input type="submit">
</form>

