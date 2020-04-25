<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sect_119</title>
<script src="SpryValidationTextField.js" type="text/javascript"></script>
</head>

<body>
<div id="Holder">
<div id="Header"></div>
<div id="NavBar">
	<nav>
    	<ul>
        	<li><a href="index.php">Home</a></li>
        	<li><a href="Login.php">Login</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="ForgotPassword.php">Forgot Password</a></li>
            <li><a href="#"></a></li>
            <li><a href="About.php">About</a></li>
        </ul>
    </nav>
</div>
<div id="Content">
	<div id="PageHeading">
	  <h1>Did you forget your Password?</h1>
	</div>
	<div id="ContentLeft">
	  <h2>Insert Email address</h2><br />
      <br />
	  <h6>We will send your password shortly.</h6>
      
	</div>
    <div id="ContentRight">
      <form id="EMPWForm" name="EMPWForm" method="post" action="EMPW-Script.php">
        <span id="sprytextfield1">
        <label for="Email"></label>
        <input name="Email" type="text" class="StyleTxtField" id="Email" />
        <br />
        <br />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
        <input name="EMPWButton" type="submit" id="EMPWButton" value="Email Password" />
      </form>
    </div>
</div>
<div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>

<div id="Content">
	<div id="PageFooter">
      <br />
      <br />
      <br />
	  <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
	</div>
</div>

</body>
</html>