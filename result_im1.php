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
echo"<br/><a href='logout.php'>登出</a>";

?>


<?php
// Database connection parameters
$servername = "localhost";  // Replace with your MySQL server host
$username = "root";     // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$dbname = "mydatabase";     // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$sName = mysqli_real_escape_string($conn, $_POST['sName']);
$sGrade = mysqli_real_escape_string($conn, $_POST['sGrade']);
$sId = mysqli_real_escape_string($conn, $_POST['sId']);
$sCity = mysqli_real_escape_string($conn, $_POST['sCity']);
$sGender = mysqli_real_escape_string($conn, $_POST['sGender']);
$sDate = $_POST['sDate'];
$sTime = $_POST['sTime'];
$sEmail = mysqli_real_escape_string($conn, $_POST['sEmail']);
// You can handle file upload separately
$sFile = mysqli_real_escape_string($conn, $_POST['sFile']);
$sColor = mysqli_real_escape_string($conn, $_POST['sColor']);
$sQuantity = (int)$_POST['sQuantity'];
$sSize = $_POST['sSize'][0];  // Assuming only one size selected
$sAct = implode(", ", $_POST['sAct']);  // Convert array to comma-separated string
$sExpect = (int)$_POST['sExpect'];
$sComment = mysqli_real_escape_string($conn, $_POST['sComment']);

// Insert data into database
$sql = "INSERT INTO registration (sName, sGrade, sId, sCity, sGender, sDate, sTime, sEmail, sFile, sColor, sQuantity, sSize, sAct, sExpect, sComment)
        VALUES ('$sName', '$sGrade', '$sId', '$sCity', '$sGender', '$sDate', '$sTime', '$sEmail', '$sFile', '$sColor', $sQuantity, '$sSize', '$sAct', $sExpect, '$sComment')";

if ($conn->query($sql) === TRUE) {
    echo "資料庫新增成功";
} else {
    echo "資料庫新增失敗" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

