<?php

// Hourly anacron executing daily in a specific hour
// 
// 1@hourly 0 testcron php /srv/data/home/cron.php


// For command line params in $_GET ( php -f cron.php key=value > log/$(date +%d-%m-%Y-%_H-%M).log )
//parse_str(implode('&', array_slice($argv, 1)), $_GET);
//print_r($_GET);

// Time zone
date_default_timezone_set('Europe/Rome');

// No web access
if (PHP_SAPI != 'cli'){
	die();
}

// Running hour config
$execHour = '03';
$thisHour = date('H');

if($thisHour != $execHour){
	die();
}

// Code to execute
$output = date('d/m/Y H:i:s');

// Operations log
//file_put_contents(dirname(__FILE__).'/log/'.date('d-m-Y_H-i-s').'.log', $output);


?>
