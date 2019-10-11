#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = trim(preg_replace("/\s+/"," ", $argv[1]));
		$array = array();
		$array = explode(" ", $str);
		for ($i = 1; $i < count($array) ; $i++)
		{
			echo ($array[$i]." ");
		}
		echo ($array[0]). "\n";
	}
?>
