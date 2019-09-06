<?php

    putenv("PATH=/app/.jdk/bin");
	$CC="javac";
	$out="java Main";
	$code=$_POST["editor"];
	$input=$_POST["input"];
	$filename_code="Main.java";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$runtime_file="runtime.txt";
	$executable="*.class";
	$command=$CC." ".$filename_code;	
	$command_error=$command." 2>".$filename_error;
	$runtime_error_command=$out." 2>".$runtime_file;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	if($runcode){$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);}
	else
	{
	$filename_in="./inputs/".$pname."in.txt";
	$filename_out=fopen("./outputs/".$pname."out.txt", "r");
	$fout=fread($filename_out,filesize("./outputs/".$pname."out.txt"));
	fclose($filename_out);
	}
	shell_exec($command_error);
	$error=file_get_contents($filename_error);
	
	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$output=shell_exec($out);
		}
		else
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$runtime_error</pre>";
		//echo "<pre>$output</pre>";
		echo "<label class=\"writeCode\">Output</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		//echo "<pre>$error</pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$output</pre>";
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else
	{
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$error</pre>";
	}
	exec("del $filename_code");
	exec("del *.txt");
	exec("del $executable");
?>
