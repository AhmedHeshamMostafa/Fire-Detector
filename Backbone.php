<?php

header('Location: index.html');

while(1)
{
	$statusFile = fopen("FireStatus.txt", "r");
	or die("Unable to open the file");

	if($statusFile == '1')
	{
		header('Location: FirePage.html');
	}


	else
	{
		header('Location: NoFirePage.html');
	}
}















?>