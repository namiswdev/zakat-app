<html>

<head>

<title>ZAKAT</title>

<link href="css/style.css" rel="stylesheet" />

</head>

<script language=Javascript>
    function validate()
    {
        var username = document.register.uname.value;
        var pass = document.register.password.value;
    
        if(username == "")
        {
            alert("Please fill in your username");
            document.register.username.focus();
            return false;
        }
        else if(!isNaN(username))
        {
            alert("Please make sure the value is in string");
            document.register.username.focus();
            return false;
        }
        else if(pass == "")
        {
            alert("Please fill in your password");
            document.register.pass.focus();
            return false;
        }
        else
        {
            alert("Hello " + username + ", Your are sucessfully login");
        }
    }
</script>

<body background="img/background.jpg">

<div class="header">
  <a class="active" href=index.html class="logo"><img src='img/logo.png' width=90 pixel" height="90 pixel"></a>
</div>

<hr>

<font face='futura' color="white"><h1 align="center">LOGIN ADMIN</h1></font>

<form name="register" action="loginAdmin.php" method="post">
<fieldset>
<legend align="center"><font face="damages" size="5" color="white"> Login </font></legend>

<br>
</br>

<center>
<table class="center">


<?php if (isset($_GET['error'])) { ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<tr>
    <td><font color="white">Username: </font></td>
    <td><input name="uname" type="text" minlength="5" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 5 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Password: </font></td>
    <td><input name="password" type="password" minlength="5" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 5 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td>
    <a href="index.html">
    <font color="white">Back To Home</font>
    </a>
    </td>
</tr>

<tr><td></td></tr>

</table>
</center>

<center>
<p>
<center>
<input type="reset" name="Reset" value="Clear">
<input type="submit" name="Submit" value="Submit" onClick="return validate();">
<input type="reset" name="button" value="Cancel">
</center>

<br>
</br>

</fieldset>
</form></font>

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