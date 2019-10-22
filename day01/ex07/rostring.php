#!/usr/bin/env php
<?php
	if ($argc > 1)
	{
		for ($m = 0; $m < $argc; $m++)
		{
			$str = trim(preg_replace("/\s+/", " ", $argv[1]));
			$dlt_space = explode(" ", $str);
		}
		for ($m = 1; $m < count($dlt_space); $m++)
			echo ($dlt_space[$m]." ");
		echo ($dlt_space[0]."\n");
    }
?>
