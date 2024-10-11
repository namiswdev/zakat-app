<html>

<head>

<title>ZAKAT</title>

<link href="css/style.css" rel="stylesheet" />

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

<font face='futura' color="white"><h1 align="center">PAY INFORMATION</h1></font>

<fieldset>
<legend align="center"><font face='damages' size="5" color="white">-</font></legend>

<?php
$samb = mysqli_connect("localhost","root","","zakat");
if (mysqli_connect_errno()){
echo "Error to connect to database:".mysqli_connect_error();
}

?>   
<center>
<br><br><br><br>
<table bgcolor="white" width="811" height='100' border="1" align="center">  
   <tr align="center">
    <td width="38"><b>No.</b></td>
    <td width="193"><b>Name</b></td>
    <td width="99"><b>Date</b></td>
    <td width="150"><b>Gender</b></td>
    <td width="169"><b>Email</b></td>
    <td width="99"><b>State</b></td>
    <td width="99"><b>Telephone</b></td>
    <td width="99"><b>Category</b></td>
    <td width="200"><b>Total Charge</b></td>
    </font>
  </tr>

  <?php 
  $data1=mysqli_query($samb,"SELECT * FROM booking ORDER BY name DESC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr align="center">
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['name']; ?><br></td>
	  <td><?php echo $info1['date']; ?><br></td>
         <td><?php echo $info1['gender']; ?><br></td>
        <td><?php echo $info1['email']; ?><br></td>
       <td><?php echo $info1['state']; ?><br></td>	
      <td><?php echo $info1['telephone']; ?><br></td>
     <td><?php echo $info1['category']; ?><br></td>
    <td><?php echo $info1['totalCharge']; ?><br></td>
 
	</td>
  </tr>
  <?php $no++; } ?>
</table>

<br>
</br>

<form action="indexAdmin.html" method="post">
<input type="submit" name="button" value="Back">
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