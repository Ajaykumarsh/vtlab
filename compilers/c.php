<?php
    
    putenv("PATH=/app/.apt/usr/bin:/app/.apt/usr/lib:/app/.apt/usr/include");
	$CC="gcc --sysroot=/app/.apt";
	shell_exec("chmod a+x $CC"); 
	$out="a.out";
	$code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.out";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("chmod a+x $executable"); 
	//exec("cacls  $filename_error /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		echo "<label class=\"writeCode\">Output</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		
        // echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		echo "<pre>$error</pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		// echo "$output";
				//echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
		
	}
	else
	{
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$error</pre>";
	}
	exec("del $filename_code");
	exec("del *.o");
	exec("del *.txt");
	exec("del $executable");
?>
