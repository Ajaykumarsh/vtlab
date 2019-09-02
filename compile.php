<?php

	$languageID="c";
    error_reporting(0);
    $runcode=1;
	if($_POST["extra"]=="subb")
	{
		$runcode=0;
	}
	else
	{
		$runcode=1;
	}
	include("compilers/c.php");
?>


