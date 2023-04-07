<?php

while(1)
{
	lines = file('file.txt');
	$line_number = 0;
	

	if(($lines[0] == 1))
	{
		header("FirePage.html");
	}


	else
	{
		header("NoFirePage.html");
	}
}















?>