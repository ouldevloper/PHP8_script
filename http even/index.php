<?php

header("Cache-Control: no-cache");
header("Content-Type: text/event-stream");


function sendEvent(){
	date_default_timezone_set("Europe/Moscow");	
	header("Cache-Control: no-cache");
	header("Content-Type: text/event-stream");
	echo "even comes ....";
}


if(isset($_GET['update']))
{
	echo "Updated ....";
	//do some thing 
	sendEvent();
}
