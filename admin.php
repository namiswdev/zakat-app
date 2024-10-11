<html>

<head>

<title>ZAKAT</title>

<link href="css/style.css" rel="stylesheet" />

</head>

<script type="text/javascript">
  var IdealTimeOut = 60; //60 seconds
  var idleSecondsTimer = null;
  var idleSecondsCounter = 0;
  document.onclick = function () { idleSecondsCounter = 0; };
  document.onmousemove = function () { idleSecondsCounter = 0; };
  document.onkeypress = function () { idleSecondsCounter = 0; };
  document.onscroll = function () { idleSecondsCounter = 0; };
  idleSecondsTimer = window.setInterval(CheckIdleTime, 1000);

function CheckIdleTime() 
{
    idleSecondsCounter++;
    var oPanel = document.getElementById("timeOut");
    if (oPanel) 
    {
        oPanel.innerHTML = (IdealTimeOut - idleSecondsCounter);
    }
      
    if (idleSecondsCounter >= IdealTimeOut) 
    {
        window.clearInterval(idleSecondsTimer);
        alert("Your Session has expired, please login again.");
        window.location = "indexAdmin.php";
    }
}
</script>

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

<font face='futura' color="white"><h1 align="center">LIST OF USERS</h1></font>

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
    <td width="800"><b>First Name</b></td>
    <td width="600"><b>Last Name</b></td>
    <td width="193"><b>Username</b></td>
    <td width="169"><b>Email</b></td>
    <td width="99"><b>Contact</b></td>
    <td width="99"><b>State</b></td>
    <td width="99"><b>Gender</b></td>
    <th width=10%>Update</th>
    <th width=10%>Delete</th></font>
  </tr>

  <?php 
  $data1=mysqli_query($samb,"SELECT * FROM users ORDER BY fname DESC");		
      $no=1;          
	while ($info1=mysqli_fetch_array($data1))
		{
		?>
  <tr align="center">
    <td><?php echo $no; ?></td>
    <td><?php echo $info1['fname']; ?><br></td>
    <td><?php echo $info1['lname']; ?><br></td>
	  <td><?php echo $info1['user_name']; ?><br></td>
         <td><?php echo $info1['email']; ?><br></td>
        <td><?php echo $info1['contact']; ?><br></td>
       <td><?php echo $info1['city']; ?><br></td>
       <td><?php echo $info1['gender']; ?><br></td>
 
   <td><a href="adminUpdate.php?id=
	<?php echo $info1['id'];?>"><center><img src='img/edit.jpg' width=20px  height=20px></center></a>
   <td><a href="adminDel.php?id=
       <?php echo $info1['id'];?>"><center><img src='img/del.jpg' width=20px  height=20px></center></a>  
 
	</td>
	
  </tr>
  <?php $no++; } ?>
</table>  
    </center>

<br>
</br>

<center>
<form action="indexAdmin.html" method="post">
<input type="submit" name="button" value="Back">
</form>
</center>

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

<a href=copyrightAdmin.html><img src='img/logo.png' width=150 pixel" height=150 pixel"></a>

<a href=copyrightAdmin.html>Disclaimer & Copyright</a>
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