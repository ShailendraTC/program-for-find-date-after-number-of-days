<?php
	$currentdate = date('2019-03-12');
	$noofdays = 16;
	function getNextDate($dateFrom, $noOfDays)
	{
		$date = strtotime($dateFrom);
		$numDays = $noOfDays - 1;
		$newDate = date('Y-m-d', strtotime("+$numDays day", $date));
		return $newDate;
	}
	
	$newdate = getNextDate($currentdate, $noofdays);
	
	echo $newdate;
?>
