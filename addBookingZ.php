<html>
<head>
<title>ZAKAT</title>
</head>
<center>
<body>
<?php

$samb = mysqli_connect("localhost","root","","zakat");
if (mysqli_connect_errno())
{
	echo "Error to connect to database:".mysqli_connect_error();
}

//$connection = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($connection,"sportcomp");

if(isset($_POST['booked']))
{
	$name = $_POST['name'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$state = $_POST['state'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$category = $_POST['category'];
	$totalCharge = $_POST['totalCharge'];

	$sql = "INSERT INTO booking(name,date,gender,state,email,telephone,category,totalCharge) VALUES ('$name','$date','$gender','$state','$email','$telephone','$category','$totalCharge')";

	//$query = "INSERT INTO `booking`('programme','applicant',`date`,`gender`,`facility`,`inventory`,`telephone`,`totalCharge`) VALUES ('$programme','$applicant','$date','$gender','$facility','$inventory','$telephone','$totalCharge')";
	//$query_run = mysqli_query($connection,$query);

	if ($samb->query($sql) === TRUE) 
    {
     	echo  "<script>alert('Your Info has Successfully Added'); 
		window.location='https://toyyibpay.com/Pay-Zakat'</script>";
    } 

	//if($query_run)
	//{
	//	echo ' <script type="text/javascript"> alert("Your Booking has Successfully") </script> '; 
	//}
	//else
	//{
	//	echo ' <script type="text/javascript"> alert("Your Booking has Not Successfully") </script> '; 
	//}
}

?>

</body>
</html>