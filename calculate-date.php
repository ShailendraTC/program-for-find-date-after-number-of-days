<?php
	$date = date('2019-03-12');
	$date = strtotime($date);
	$newdate = date('Y-m-d', strtotime("+7 day", $date));
	
	echo $newdate;
	
	echo '<br/>';
	//$currdate = strtotime(date('Y-m-d'));
	echo date('Y-m-d', strtotime("+10 day", strtotime(date('Y-m-d'))));
	
	
	
	echo '<br/>';
	
	function getNextDate($dateFrom, $noOfDays)
	{
		$date = strtotime($dateFrom);
		$numDays = $noOfDays - 1;
		$newDate = date('Y-m-d', strtotime("+$numDays day", $date));
		return $newDate;
	}
	
	echo getNextDate('2019-04-03', 4)
?>