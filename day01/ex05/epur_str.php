#!/usr/bin/php
<?php
	unset($argv[0]);
	$str =trim(preg_replace("/\s+/", " ", $argv[1]));
	echo $str;
?>
