<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function Validate()
{
	var phone=document.getElementById('phone').value;
	var name=document.getElementById('name').value;
	var pass=document.getElementById('pass').value;
	var pass1=document.getElementById('pass1').value;
	var username=document.getElementById('username').value;
	if(name==null || name=="")
	{
		
		window.alert("please enter name");
		 return false;
	}
 if(phone==null || phone=="")
	{
		window.alert("please enter phone number");
		return false;
	}
	if(username==null || username=="")
	{
	window.alert("please enter username");
	return false
	}
if(pass==null || pass=="")
	{
	window.alert("please enter password");
	return false
	}
if(pass1==null || pass1=="")
	{
	window.alert("please enter password");
	return false
	}
	if(pass!=pass1)
	{
	window.alert("password not matching");
	return false;
	}
	else
	{
 		return true;
	}
	
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" onsubmit="return Validate()" action="sample2.php" name="mm">
<p>Name 
  <input type="text" name="name"  placeholder="name" id="name"/>
  <p id="err"></p>
</p>
<p>
  phone no: 
  <input type="text" name="phone"  placeholder="phone" id="phone" />
  <p id="phone_null"> </p>
</p>
<p>Email
  <input type="email" name="email"  placeholder="email" id="email"/>
</p>
<p>
  Username 
  <input type="text" name="username" placeholder="Username" id="username"/>
</p>
<p>Password 
  <input type="password" name="password" placeholder="Password" id="pass"/>
</p>
<p>
  Retype password 
  <input type="password" name="repassword" placeholder="Retype password"  id="pass1"/>
</p>
<input type="submit" name="submit" value="submit" onclick="return Validate()" />
</form>
</body>
</html>


