<?php
    
    putenv("PATH=/usr/bin:/usr/lib:/app/.apt/usr/include:/app/.apt/usr/lib");
	$CC="gcc --sysroot=/app/.apt/ -w";
	//shell_exec('cp /lib/* -r /app/.apt/lib/'); 
	$out="a.out";
	$code=$_POST["editor"];
	$input=$_POST["input"];
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.out";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;
	//$filename_out="./outputs/stackout.txt";
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
	$filename_in="./inputs/stackin.txt";
	$filename_out=fopen("./outputs/stackout.txt", "r");
	$fout=fread($filename_out,filesize("./outputs/stackout.txt"));
	fclose($filename_out);
	}
	
	//exec("cacls  $filename_error /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);
	exec("chmod a+x $executable");
	if(trim($error)=="")
	{
		if($runcode)
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec('./a.out');
			if(trim($input)!="")
				$output=shell_exec('./a.out < '.$filename_in);
		}
		else 
		{
			exec("chmod a+x $executable"); 
			$out=$out." < ".$filename_in;
			$output=shell_exec('./a.out < '.$filename_in);
			if($output==$fout) $output="Test case passed.";
			else $output="Test case failed.";
		}
		echo "<label class=\"writeCode\">Output</label><br><br><pre class=\"GrayBlock\">$output</pre>";
		
        // echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		echo "<pre>$error</pre>";
		if(trim($input)=="" && $runcode)
		{
			exec("chmod a+x $executable"); 
			$output=shell_exec('./a.out');
		}
		else
		{
			exec("chmod a+x $executable"); 
			$out=$out." < ".$filename_in;
			$output=shell_exec('./a.out < '.$filename_in);
		}
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$output $input</pre>";
		// echo "$output";
				//echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
		
	}
	else
	{
		echo "<label class=\"writeCode\">Error</label><br><br><pre class=\"GrayBlock\">$error</pre>";
	}
	exec("rm $filename_code");
	exec("rm *.o");
	exec("rm *put.txt");
	exec("rm $executable");
?>
