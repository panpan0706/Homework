<?php
$link = @mysqli_connect(
			'localhost',
			'root',
			'n8327912n',
			'php2017'	
			);

if($link){
	echo "DB Connection!";
}else{
	echo "DB Connection Failed<br>";
}

mysqli_query($link,"SET NAMES utf8");

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

$sql2="INSERT INTO robot (name,gender,year,month,day,id,YourLocation,tel,email,time,food,suggest) VALUES ('$name','$gender','$year','$month','$day','$id','$YourLocation','$tel','$email','$time','$food','$suggest',)";
$result=mysqli_query($link,$sql2);

$result=mysqli_query($link,"SELECT * FROM robot");
echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>";
echo $row["no"];
echo "</td><td>";
echo $row["name"];
echo "</td><td>";
echo $row["gender"];
echo "</td><td>";
echo $row["year"];
echo "</td><td>";
echo $row["month"];
echo "</td><td>";
echo $row["day"];
echo "</td><td>";
echo $row["id"];
echo "</td><td>";
echo $row["YourLocation"];
echo "</td><td>";
echo $row["tel"];
echo "</td><td>";
echo $row["email"];
echo "</td><td>";
echo $row["time"];
echo "</td><td>";
echo $row["food"];
echo "</td><td>";
echo $row["suggest"];
echo "</td>";
echo "</tr>";
}
echo "</table>";



mysqli_close($link);
?>