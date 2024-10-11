<html>
<head>

<title>ZAKAT</title>

<link href="css/style.css" rel="stylesheet" />

<style type="text/css">

</style>

</head>

<body background='img/background.jpg'>

<div class="header">
  <a class="active" href=index.html class="logo"><img src='img/logo.png' width=90 pixel" height="90 pixel"></a>
  <div class="header-right">
    <a href="indexAdmin.html">Home</a>
    <a href="dashboardAdmin.html">Dashboard</a>
	  <a href="index.html">Logout</a>
  </div>
</div>

<hr>

<font face='futura' color="white"><h1 align="center">UPDATE LIST</h1></font>

<fieldset>
<legend align="center"><font face='damages' size="5" color="white">-</font></legend>

<p>

<body>
<?php

$samb = mysqli_connect("localhost","root","","zakat");
if (mysqli_connect_errno()){
echo "Error to connect to database:".mysqli_connect_error();
}

if(isset($_POST['update']))
{    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user_name = $_POST['user_name'];
    $city = $_POST['city'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
	$id=$_POST['id'];
	
//SAVE WITH NEW VALUE
$result = mysqli_query($samb,
"UPDATE users SET fname='$fname',lname='$lname',user_name='$user_name',city='$city',email='$email',contact='$contact' WHERE id=$id");
echo "<script>alert('Successfully Update!'); 
window.location='admin.php'</script>";
}

//GET THE ID FROM URL
$id = $_GET['id'];
//SHOW THE CURRENT RECORD
$result = mysqli_query($samb, "SELECT * FROM users
WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $fname=$res['fname'];
    $lname=$res['lname'];
    $user_name=$res['user_name'];
    $city=$res['city'];
    $email=$res['email'];
	$contact=$res['contact'];
}
?>

<center>
    <form name="form1" action="adminUpdate.php" method="POST">
<table class="center">  
  <tr>
    <td width="100"><font color="white"><b>First Name: </b></font></td>
    <td><b>
	<input size="50"type="text" name="fname" id="fname" value="<?php echo $fname;?>" />
	</td>
  </tr>
  <tr>
  <tr>
  <td width="100"><font color="white"><b>Last Name: </b></font></td>
    <td><b>
	<input size="50"type="text" name="lname" id="lname" value="<?php echo $lname;?>" />
	</td>
  </tr>
  <tr>
  <tr>
    <td width="100"><font color="white"><b>Username: </b></font></td>
    <td><b>
	<input size="50"type="text" name="user_name" id="user_name" value="<?php echo $user_name;?>" />
	</td>
  </tr>
  <tr>
  <tr>
    <td><font color="white"><b>State: </b></font></td>
    <td>
        <select name="city">
            <option value="Perlis"

            <?php
              if($city == 'Perlis')
              {
                echo "selected";
              }
              ?>
            >Perlis</option>

            <br>
            <option value="Kedah">Kedah</option>
            <br>
            <option value="Perak">Perak</option>
            <br>
            <option value="Johor">Johor</option>
            <br>
            <option value="Kelantan">Kelantan</option>
            <br>
            <option value="Melaka">Melaka</option>
            <br>
            <option value="Negeri Sembilan">Negeri Sembilan</option>
            <br>
            <option value="P.Pinang">P.Pinang</option>
            <br>
            <option value="Sabah">Sabah</option>
            <br>
            <option value="Sarawak">Sarawak</option>
            <br>
            <option value="Selangor"
            
            <?php
            if($city == 'Selangor')
            {
              echo "selected";
            }
            ?>
            
            >Selangor</option>
            <br>
            <option value="Terengganu"
            
            <?php
            if($city =='Terengganu')
            {
              echo "selected";
            }
            ?>
            
            >Terengganu</option>
            <br>
            <option value="Pahang">Pahang</option>
            <br>
            <option value="Kuala Lumpur">Kuala Lumpur</option>
            <br>
    </select>
    </td>
</tr>
	</td>
  </tr>
  <tr>
    <td width="100"><font color="white"><b>Email: </b></font></td>
    <td><b>
	<input size="50"type="text" name="email" id="email" value="<?php echo $email;?>" />
	</td>
  </tr>
  <tr>
    <td width="100"><font color="white"><b>Contact: </b></font></td>
    <td><b>
    <input size="50"type="text" name="contact" id="contact" value="<?php echo $contact;?>" />
	</td>
  </tr>
  <tr>

</table>	

<br>
</br>

<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<input type="submit" name="update" id="submit" value="Update" />
<input type="reset"  value="Reset" />
<input type="submit" value="Back" formaction="admin.php" formmethod="post">
    </form>

<br>
</br>

</fieldset>

<hr>

<div class="footer">
<center>
<font color='white'><pre>













</center>
</div>

<div class="footer">
<center>
<pre>

<a href=copyright.html><img src='img/logo.png' width=150 pixel" height=150 pixel"></a>

<a href=copyright.html>Disclaimer & Copyright</a>
</pre></hl></font>
</center>
</div>

<div class="footer">
  <center>
  <font color='white'><pre>
  
  
  
  
  
  
  
  
  
  
  
  </font>
  </center>
  </div>

</body>

</head>

</html>