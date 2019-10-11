#!/usr/bin/php
<?php
	function ft_is_sort($argv)
	{
		if (count($argv) == 1)
			return (TRUE);
		$sort = $argv;
		sort($sort);
		
		for ($i = 0; $i < count($sort) ; $i++)
		{
			if (strcmp($sort[$i], $argv[$i]))
				return (FALSE); 
		}
		return (TRUE);
	}
?>
