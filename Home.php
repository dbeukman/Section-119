<?php require_once('localhost.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "Login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_localhost, $localhost);
$query_Recordset_Home = "SELECT * FROM `user`";
$Recordset_Home = mysql_query($query_Recordset_Home, $localhost) or die(mysql_error());
$row_Recordset_Home = mysql_fetch_assoc($Recordset_Home);
$totalRows_Recordset_Home = mysql_num_rows($Recordset_Home);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<title>BMTC</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
</head>

<body>
<div id="Holder">
<div id="Header"></div>
<div id="NavBar">
	<nav>
    	<ul>
            <li><a href="#">Admin</a></li>
        	<li><a href="#">Mining</a></li>
            <li><a href="#">Engineering</a></li>
            <li><a href="#">Q.A.</a></li>
            <li><a href="#">C.E.</a></li>
            <li><a href="#">Reports</a></li>
        </ul>
    </nav>
</div>
<div id="Content">
	<div id="PageHeading">
	  <h1>Welcome to ...</h1>
	</div>
	<div id="ContentLeft">
	  <h2><u>BMTC</u></h2>
	  <br />
	  <br />
      The best Training Centre ever!
      
	</div>
    <div id="ContentRight">
    <h2></h2>
    </div>
</div>
<div id="Footer"></div>

<div class="box">
    <center><img src="assets/XLP.jpg" width="500" height="291" /></center>
</div>

<div id="Content">
	<div id="PageFooter">
      <br />
      <br />
	  <h1><center>Bathopele Mechanised Training Centre</center></h1>
      <br />
      <br />
      <br />
      <br />
      <br />
	</div>
</div>
<div align="right"><a href="<?php echo $logoutAction ?>"><strong>-Log Out</strong></a></div>
<div align="right"><a href="<?php echo $logoutAction ?>"><strong>-Admin</strong></a></div>

</body>
</html>
<?php
mysql_free_result($Recordset_Home);
?>
