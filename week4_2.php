<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=BIG5">
<title>Hello Robot!</title>
</head>
<body >
</br>
</br></br></br></br></br></br></br></br>
<center><b><font face="細明體" color="#FFBB66" size="15">2017</font></b></center></br>
<center><b><font face="細明體" color="#FFBB66" size="6">世界機器人大展</font></b></center></br>
<center><img src="http://www.stockfeel.com.tw/wp-content/uploads/2014/10/05-1.jpg"></center>
<center><b><HR width="50%"></HR></b></center>
</br></br></br></br>
<center>
<B><FONT width="50%">< 表單填寫確認 ></FONT></B></br></br>
</center>
</br></br></br>
<center>
<?php

$name=$_GET["name"];
$gender=$_GET["gender"];
$year=$_GET["year"];
$month=$_GET["month"];
$day=$_GET["day"];
$id=$_GET["id"];
$YourLocation=$_GET["YourLocation"];
$tel=$_GET["tel"];
$email=$_GET["email"];
$date=$_GET["date"];
$time=$_GET["time"];
$food=$_GET["food"];
$suggest=$_GET["suggest"];

echo "您的名字是:".$name."<br/>";
echo "您的性別是:".$gender."<br/>";
echo "您的生日是:".$year."/".$month."/".$day."<br/>";
echo "您的身分證字號是:".$id."<br/>";
echo "您的居住地是:".$YourLocation."<br/>";
echo "您的電話是:".$tel."<br/>";
echo "您的信箱是:".$email."<br/>";
echo "您的參加的場次是:".$date."<br/>";
echo "您的時段是:".$time."<br/>";
echo "您的點心是:".$food."<br/>";
echo "您的建議是:".$suggest."<br/>";





?></center>
</br></br></br></br>
<center><b><HR width="50%"></HR></b></center>
</br></br>
</form>
<center><B>感謝你的報名!</B></center>

</body>
</html>
