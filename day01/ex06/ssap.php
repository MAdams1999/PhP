#!/usr/bin/env php
<?php

	function ft_split($str)
	{
		$words = explode(" ", $str);
		$sort_words = array_values(array_filter($words));
		sort($sort_words);
		return ($sort_words);
	}
	
	if ($argc > 1)
	{
		$arr = array();
		for ($m = 1; $m < count($argv); $m++)
		{
			$str = trim(preg_replace("/\s+/"," ", $argv[$m]));
			$delete_space = ft_split($str);
			for ($c = 0; $c < count($delete_space); $c++)
			{
				$words = array_push($arr, $delete_space[$c]);
			}
		}
		sort($arr);
		for ($m = 0; $m < count($arr); $m++)
			echo ($arr[$m]."\n");
	}
?>
