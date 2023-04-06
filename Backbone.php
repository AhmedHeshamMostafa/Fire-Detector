<?php



while(1)
{
	$lines = file('file.txt');
	$line_number = 0;
	

	if(($lines[0] == 1))
	{
		echo($lines[0]);
		echo("You have a fire!");
	}


	else
	{
		echo($lines[0]);
		echo("No fire!");
	}
}















?>