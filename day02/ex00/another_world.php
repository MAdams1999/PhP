#!/usr/bin/env php
<?php
        for ($m = 0; $m < count($argv); $m++)
        {
            $str = trim(preg_replace("/\s+/", " ", $argv[1]));
        }
        echo ($str."\n");
?>