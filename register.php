<html>

<head>

<title>ZAKAT</title>

<link href="css/style.css" rel="stylesheet" />

</head>

<script language=Javascript>
    function validate()
    {
        var fname = document.register.fname.value;
        var lname = document.register.lname.value;
        var email = document.register.email.value;
        var no = document.register.contact.value;
        var username = document.register.uname.value;
        var pass = document.register.password.value;
    
        if(fname == "")
        {
            alert("Please fill in your first name");
            document.register.fname.focus();
            return false;
        }
        else if(!isNaN(fname))
        {
            alert("Please make sure the value is in string");
            document.register.fname.focus();
            return false;
        }

        else if(lname == "")
        {
            alert("Please fill in your last name");
            document.register.lname.focus();
            return false;
        }
        else if(!isNaN(lname))
        {
            alert("Please make sure the value is in string");
            document.register.lname.focus();
            return false;
        }
        else if(email == "")
        {
            alert("Please fill in your email");
            document.register.email.focus();
            return false;
        }
        else if(no == "")
        {
            alert("Please fill in your contant number");
            document.register.no.focus();
            return false;
        }

        else if(username == "")
        {
            alert("Please fill in your name");
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
            alert("Hello " + username + ", Your are sucessfully sign up");
        }
    }
</script>

<body background="img/background.jpg">

<div class="header">
  <a class="active" href=index.html class="logo"><img src='img/logo.png' width=90 pixel" height="90 pixel"></a>
</div>

<hr>

<font face='futura' color="white"><h1 align="center">REGISTER</h1></font>

<form name="register" action="signup-check.php" method="post">
<fieldset>
<legend align="center"><font face="damages" size="5" color="white">-</font></legend>

<br>
</br>

<center>
<table class="center">
<tr>
    <td><font color="white">First Name: </font></td>
    <td><input name="fname" type="text" maxlength="50" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Last Name: </font></td>
    <td><input name="lname" type="text" maxlength="50" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Gender: </font></td>
    <td><input checked="checked" type="radio" name="gender" value="Male"><font color="white">Male</font></td>
</tr>
<tr>
    <td></td>
    <td><input type="radio" name="gender" value="Female"><font color="white">Female</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Home Address: </font></td>
    <td><textarea name="address" rows="10" cols="42" required></textarea></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">City: </font></td>
    <td>
    <select name="city">
    <option value="Perlis">Perlis</option>
    <br>
    <option value="Kedah">Kedah</option>
    <br>
    <option selected="selected" value="Perak">Perak</option>
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
    <option value="Selangor">Selangor</option>
    <br>
    <option value="Terengganu">Terengganu</option>
    <br>
    <option value="Pahang">Pahang</option>
    <br>
    <option value="Kuala Lumpur">Kuala Lumpur</option>
    <br>
</select>
    </td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Email: </font></td>
    <td><input name="email" type="text" size="40" required></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Telephone: </font></td>
    <td><input name="contact" type="contact" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: Without"-"</td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Username: </font></td>
    <td><input name="uname" type="text" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 3 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Password: </font></td>
    <td><input name="password" type="password" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 3 - 12 characters maximum</font></td>
</tr>

<tr><td></td></tr>

<tr>
    <td><font color="white">Re-Enter Password: </font></td>
    <td><input name="re_password" type="password" minlength="3" maxlength="12" size="40" required></td>
</tr>
<tr>
    <td></td>
    <td><font color="white">Note: 3 - 12 characters maximum</font></td>
</tr>

</table>
</center>

<center>
<p>
<center>
<input type="reset" name="Reset" value="Clear">
<input type="submit" name="button" value="Submit" onClick="return validate();">
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