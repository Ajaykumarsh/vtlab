<?php
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
  if(!isset($_SESSION['username']))
  {
    header("Location: index.php");
    exit;
  }
}
?>
<?php

	$languageID=$_POST["lang"];
    error_reporting(0);
    $runcode=0;
    $val=$_POST["extra"];
    if($val=="subb")
	{
		$runcode=0;
	}
	else
	{
		$runcode=1;
	}
    if ($languageID=="c")
    {
		include("compilers/c.php");
	}
	else if($languageID=="cpp")
	{
		include("compilers/cpp.php");
	}
	else if($languageID=="py2")
	{
		include("compilers/py2.php");
	}
	else if($languageID=="py3")
	{
		include("compilers/py3.php");
	}
	else
		include("compilers/java.php");
?>


