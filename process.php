<?php
echo session_status();
session_start();
if($_POST)
{
  if($_POST['session_type']=="register")
  {
   require_once("registerprocess.php");
  }
  else if($_POST['session_type']=="login")
  {
    require_once("loginprocess.php");
  }
  else echo("ERROR SESSION TYPE MISMATCH-- titles.php");
  
$_SESSION["username"]=$_POST['name'];
$_SESSION["usn"]=$_POST['usn'];

echo session_status();
echo $_SESSION["username"];

  header("Location: titles.php");
  exit;

}
else if(!isset($_SESSION["username"]))
{
  header("Location: index.php");
  exit;
}
?>