#!/usr/bin/php
<?php
    date_default_timezone_set("Europe/Paris");
	$fd = fopen("/var/run/utmpx", 'r');
	while ($line = fread($fd, 628)) {
		$me = unpack("a256user/a4id/a32line/ipid/itype/Itime", $line);
		if ($me[type] == 7) {
			echo "$me[user] $me[line]  ". date('M  j H:i', $me[time])."\n";
		}
	}
?>