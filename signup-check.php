<?php 
session_start(); 
include "db_conn2.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['fname']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$email = validate($_POST['email']);
	$contact = validate($_POST['contact']);
	$gender = validate($_POST['gender']);
	$address = validate($_POST['address']);
	$city = validate($_POST['city']);
	// $educate = validate($_POST['educate']);

	$re_pass = validate($_POST['re_password']);
	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);

	$user_data = 'uname='. $uname. '&fname='. $fname;


	if (empty($uname)) {
		header("Location: register.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: register.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: register.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($contact)){
        header("Location: register.php?error=Contact is required&$user_data");
	    exit();
	}
	else if(empty($gender)){
        header("Location: register.php?error=Contact is required&$user_data");
	    exit();
	}
	else if(empty($address)){
        header("Location: register.php?error=Contact is required&$user_data");
	    exit();
	}
	else if(empty($city)){
        header("Location: register.php?error=Contact is required&$user_data");
	    exit();
	}
	else if(empty($fname)){
        header("Location: register.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($lname)){
        header("Location: register.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, fname, lname, email, contact, address, gender, city) VALUES('$uname', '$pass', '$fname', '$lname', '$email', '$contact', '$address', '$gender', '$city')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 	header("Location: login.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}