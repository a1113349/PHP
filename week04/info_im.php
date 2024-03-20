<html>
<head>
<meta charset="utf8">
</head>
<form action="result_im.php"method="post">
資管晚會報名表<br/>
姓名:<input type="text" name="sName" value=""placeholder="填入姓名"required><br/>
年級:<input type="grade" name="sGrade"value=""placeholder="填入年級"required><br/>
學號:<input type="id" name="sId"value=""placeholder="填入學號"required><br/>
住家市政區:<br/>
<input type="radio"name="sCity"value="台北"checked>台北
<input type="radio"name="sCity"value="台南">台南
<input type="radio"name="sCity"value="高雄">高雄
<input type="radio"name="sCity"value="基隆">基隆
<input type="radio"name="sCity"value="新北">新北<br/>
<input type="radio"name="sCity"value="桃園">桃園
<input type="radio"name="sCity"value="新竹">新竹
<input type="radio"name="sCity"value="苗栗">苗栗
<input type="radio"name="sCity"value="台中">台中
<input type="radio"name="sCity"value="彰化">彰化<br/>
<input type="radio"name="sCity"value="南投">南投
<input type="radio"name="sCity"value="雲林">雲林
<input type="radio"name="sCity"value="嘉義">嘉義
<input type="radio"name="sCity"value="屏東">屏東
<input type="radio"name="sCity"value="宜蘭">宜蘭<br/>
<input type="radio"name="sCity"value="花蓮">花蓮
<input type="radio"name="sCity"value="台東">台東
<input type="radio"name="sCity"value="澎湖">澎湖
<input type="radio"name="sCity"value="綠島">綠島
<input type="radio"name="sCity"value="蘭嶼">蘭嶼<br/>
<input type="radio"name="sCity"value="金門">金門
<input type="radio"name="sCity"value="馬祖">馬祖

<br/>
性別<br/>
<input type="radio"name="sGender"value="男">男
<input type="radio"name="sGender"value="女"checked>女
<br/>
你的出生日期:
<input type="date"name="sDate"value="">
<input type="time"name="sTime"value=""><br/>
Email:<input type="email"name="sEmail"value=""><br/>
上傳一份自我介紹:
<input type="file"name="sFile"value=""><br/>
<input type="hidden"name="sSecret"value="i love u"><br/>
衣服顏色:
<input type="color"name="sColor"value=""><br/>
我要幾件衣服:
<input type="number"name="sQuantity"><br/>
請輸入衣服尺寸:
<select name="sSize[]">
<option value="S">S
<option value="M">M
<option value="L">L
<option value="XL">XL
</select>
<br/>
<br/>
如何得知該活動(可複選):<br/>
<input type="checkbox"name="sAct[]"value="同學告知">同學告知
<input type="checkbox"name="sAct[]"value="廣告得知">廣告得知
<input type="checkbox"name="sAct[]"value="老師宣傳">老師宣傳
<input type="checkbox"name="sAct[]"value="其他">其他
<br/>
請輸入對於該活動期待的百分比:
<input type="range"name="sExpect"><br/>
請輸入你的意見:
<textarea name="sComment"value=""rows="10"cols="50">
</textarea>
<br/>
<input type="submit"value="送出">
<input type="reset"value="寫錯了">
<br/>
<font color="red">送出後會跑出送出的個人資料，請查閱是否正確。</font>



</form>

</html>