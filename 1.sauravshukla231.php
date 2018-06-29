<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIC Insurance</title>
<style type="text/css">
.header{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}
.footer{
	width:100%;
	height:200px;

	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
		}		
.menu{
	width:100%;
	height:50px;
	
	background-color:green;
	float:left;
	text-align:center;
	color: #FFF;
		}
.leftcontent2{
	width:33%;
	height:250px;

	background-color: #999;
	float:left;
	text-align:center;
	color: #FFF;
		}

</style>
<script language="javascript1.5">
function f1()
{
var pa=parseInt(document.getElementById('pa').value);
var duration=parseInt(document.getElementById('duration').value);
var total=(pa*duration);
document.getElementById('ta').value=total;
}
function f2()
	{	
var val=document.getElementById('uname').value;
var data=val.toUpperCase();	
document.getElementById('uname').value=data;	
	}
function f3()
	{	
if(isNaN(document.getElementById('contact').value))
		{
alert('Contact Number should be a numeric value only ');	
		}
//document.getElementById('uname').value=data;	
	}	
</script>
</head>
<body >
<div class="header">
<marquee>Site's Header </marquee><div class="image"><img src="1.jpg"height=100px width=1330px>
</div>
<div class="menu">
Site's Menu
</div>


<form method="POST">
<div class="frontform"><input type="text" name="uname" id="uname" placeholder="Your Name" required="required" onkeyup="f2()"  /></div>
<div class="frontform"><input type="email" name="uemail" placeholder="Your Email" required="required"  /></div>
<div class="frontform"><input type="text" name="contact" id="contact" placeholder="Your Contact" maxlength="10" onkeyup="f3()" required="required"  /></div>
<div class="frontform">B.tech: <input type="radio" name="info" value="Academics" /> |
BCA: <input type="radio" name="info" value="Programs" /></div>
BBA: <input type="radio" name="info" value="Placements" /></div>|MBA: <input type="radio" name="info" value="About uss" /></div></br>
Courses<input type="checkbox" name="tutorialproblem" value="tutorialproblem" /> |
Beyond Academics<input type="checkbox" name="info" value="info" /> |
Other<input type="checkbox" name="other" value="other" />
</div>
<div class="frontform"><textarea name="Problem" required="required"> Querry ? </textarea></div>

<div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option>
</select>
<input type="submit" name="submit"  />
</div>
</div>
</form>
<div class="leftcontent2">
<form method="post" >
<div class="frontform"><input type="number" name="pa" id="pa"  placeholder="COURSE CODE" /></div>
<div class="frontform"><input type="number" name="duration" id="duration" placeholder="Duration" onblur="f1()"  /></div>
<div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="Total Amount" /></div>

<div class="frontform"><input type="submit" name="duration"  /></div>
</div>
</form>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Fees</a></br>
    <a href="#">Course Duration</a>

  </div>
</div>

<div class="footer"><img src="1.jpg"height=300px width=1330px>
</div>

</body>
</html>