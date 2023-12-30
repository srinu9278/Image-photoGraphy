<?php
include 'connection.php';
if($connection)
{
	echo "";
}
else
{
	echo "Error:".mysqli_error($connection)."<br>";
}
$name=$_POST['uuser'];
$date=$_POST['date'];
$wedd=$_POST['wedd'];
$place=$_POST['places'];
$email=$_POST['uemail'];
$phonenumber=$_POST['umobile'];
$address=$_POST['address'];

$query="SELECT * FROM wedding ;";
$check=mysqli_query($connection,$query);
if($check){
	echo "";
}
else
{
    $query="CREATE TABLE wedding(uname varchar(30) NOT NULL,dateOfEvent DATE,wedding varchar(30),place varchar(15),email varchar(40),phonenumber char(10),uaddress varchar(15));";
    if(mysqli_query($connection,$query))
	{
		echo "";
	}

	else
	{
		echo "error:".$query.mysqli_error($connection);
	}
}
echo"<br>";
$query="INSERT INTO wedding VALUES('$name','$date','$wedd','$place','$email','$phonenumber','$address');";
if(mysqli_query($connection,$query))
{
	echo "Your data has been recorded.Our Team will arrive to your Destination"."<br><br><br>";
}
else
{
	echo "error:".$query.mysqli_error($connection)."<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-4 text-light">
        <div class="card bg-dark">
        <div class="card-header">PHOTOGRAPHER</div>
        <img src="images/photographer.webp"  class="card-img-top">
        <div class="card-body">
        <div class="card-title"><h5>Name:John Wick</h5></div>
        <div class="card-text"></div>
        </div>
        <div class="card-footer"></div>
        <button class="btn btn-dark"><b>Contact:</b>9876543210</button>
        </div>

        
     </div>
     
        <div class="col-md-4 text-light ">
        <div class="card bg-dark">
        <div class="card-header">Videographer</div>
        <img src="images/videographer.png"  class="card-img-top">
        <div class="card-body">
        <div class="card-title"><h5>Name:Alex Harry</h5></div>
        <div class="card-text"></div>
        </div>
        <div class="card-footer"></div>
        <button class="btn btn-dark"><b>Contact:</b>9898989898</button>
        </div>
        </div>

        <div class="col-md-4 text-light">
            <div class="card bg-dark">
            <div class="card-header">Drone Operator</div>
                 <img src="images/drone_operatorr.png"  class="card-img-top">
            <div class="card-body">
            <div class="card-title"><h5>Name:Sam Curran</h5></div>
            <div class="card-text"></div>
            </div>
                <div class="card-footer"></div>
                    <button class="btn btn-dark"><b>Contact:</b>8989898989</button>
                </div>
         </div>

        <br><br> <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="bs2.html">Back to Home</a></li>
      
      
    </ul>
  </nav>
  


    
</body>
</html>


