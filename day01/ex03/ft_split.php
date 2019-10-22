#!/usr/bin/env php
<?php
    function ft_split($str)
    {
        $m = explode(" ",$str);
        sort($m);
        $arr = array();
        foreach($m as $key)
            $arr[] = $key;
    }
    unset($m);
    return($arr);
?>