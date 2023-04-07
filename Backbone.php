<?php

while(1)
{
	$file_path = 'FireStatus.txt';
	$file_contents = file($file_path, FILE_IGNORE_NEW_LINES);
	
	$value_to_check = 'FAGR';
	
	if(in_array($value_to_check, $file_contents))
	{
		header ("Location: FirePage.html");
	}
	
	else
	{
		header ("Location: index.html");
	}
	
}


?>