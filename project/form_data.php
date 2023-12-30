<?php
include 'connection.php';
if($connection)
{
	echo "<br>";
}
else
{
	echo "Error:".mysqli_error($connection)."<br>";
}
$name=$_POST['uuser'];
$date=$_POST['date'];
/*$gender=$_POST['gender'];*/
$qualification=$_POST['qualification'];
$specialization=$_POST['specialization'];
$phonenumber=$_POST['umobile'];
$email=$_POST['uemail'];
$address=$_POST['address'];

$query="SELECT * FROM hiring ;";
$check=mysqli_query($connection,$query);
if($check){
	echo "";
}
else
{
	
    $query="CREATE TABLE hiring(uname varchar(30) NOT NULL,dateofBirth DATE,Qualification varchar(30),Specialization varchar(30),phonenumber char(10),email varchar(40),uadress varchar(15));";
    if(mysqli_query($connection,$query))
	{
		echo ""."<br><br>";
	}

	else
	{
		echo "error:".$query.mysqli_error($connection);
	}
}
echo"<br>";

$query="INSERT  into hiring values('$name','$date','$qualification','$specialization','$phonenumber','$email','$address');";
if(mysqli_query($connection,$query))
{
	
	echo "Thanks for Filling Your Details";
}
else
{
	echo "error:".$query.mysqli_error($connection);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<div class="back">
        <a href="bs2.html">&#8249; Home</a>
        </div>

</body>
</html>
