<?php

header('Location: index.html');

while(1)
{
	$statusFile = fopen("FireStatus.txt", "r");

	if($statusFile == 1)
	{
		header('Location: FirePage.html');
		exit();
	}


	else
	{
	header('Location: NoFirePage.html');
	exit();
	}
}















?>