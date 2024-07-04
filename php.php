<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>video library</title>
<script src="../../../../../xampp/htdocs/demo/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../../../../../xampp/htdocs/demo/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="skyblue">
<table width="100%" border="1">

  <tr>
    <td height="100"><center>
      <img src="images/download.jpeg" width="100" height="100" /> <br/>
      Welcome to Digital Video Library
      <?php require_once('Connections/conn.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO school (SchoolName, SchoolCode, SchoolAddress, SchoolTown) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['SchoolName'], "text"),
                       GetSQLValueString($_POST['SchoolCode'], "text"),
                       GetSQLValueString($_POST['SchoolAddress'], "text"),
                       GetSQLValueString($_POST['SchoolTown'], "text"));

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());
}
?>
    </center></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="#">Home</a>        </li>
      <li><a href="#">Our Services</a></li>
      <li><a href="#">Our Products</a>        </li>
      <li><a href="#" class="MenuBarItemSubmenu">Orders</a>
        <ul>
          <li><a href="#">Order Forms</a></li>
          <li><a href="#">Payments</a></li>
        </ul>
      </li>
</ul></td>
  </tr>
</table>
 <hr  size="5" color="black" width="100%" />
<table width="100%" border="1">
  <tr>
    <td height="250">
    <fieldset> <legend align ="center"> Enter the details and click on submit.</legend></fieldset>
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table align="center">
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">SchoolName:</td>
            <td><input type="text" name="SchoolName" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">SchoolCode:</td>
            <td><input type="text" name="SchoolCode" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">SchoolAddress:</td>
            <td><input type="text" name="SchoolAddress" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">SchoolTown:</td>
            <td><input type="text" name="SchoolTown" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Insert record" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      <p>&nbsp;</p>
    </fieldset> </td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>Footer<center> &copy;Copyright 2024 Industrial training. All rights reserved.</center></td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});


</script>
</body>
</html>