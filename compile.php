<?php

	$languageID="c";
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
	include("compilers/c.php");
?>


