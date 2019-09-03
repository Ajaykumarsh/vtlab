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
	else
		include("compilers/java.php");
?>


