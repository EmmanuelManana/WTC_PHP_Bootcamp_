#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$array = array_filter(preg_split("/ +/", $str));
		sort($array);
		if (!count($array) || !$array[0])
			return (NULL);
		return ($array);
	}

	if ($argc > 1)
	{
		$arr = array();
		for ($i = 1; $i < count($argv); $i++)
		{
			$str = trim(preg_replace("/\s+/", " ", $argv[$i]));
			$split = ft_split($str);
			for ($j = 0; $j < count($split); $j++) {
				$word = array_push($arr, $split[$j]);
			}
		}
		sort($arr);
		for ($i = 0; $i < count($arr); $i++)
			echo ($arr[$i]."\n");
	}
?>
