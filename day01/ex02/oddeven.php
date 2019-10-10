#!/usr/bin/php
<?php
	$stdin = fopen('php://stdin', 'r');
	while ($stdin && !feof($stdin))
	{
		print('Enter Number:');
		$input = trim(fgets($stdin));

		if (is_numeric($input))
		{
			if ($input % 2 == 0)
			{
				echo "The number ".$input." is even";
			}
			else
			{
				echo "The number ".$input." is odd";
			}
			echo "\n";
		}
		else if (feof($stdin))
			echo "^D\n"; 
		else
		{	echo $input;
			echo " is not number\n"; 
		}
	}
?>
