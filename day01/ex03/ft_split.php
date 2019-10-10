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
?>
