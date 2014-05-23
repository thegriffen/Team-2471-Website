<?php
	require_once('coreylib.php');
	$email = "chsfirst@gmail.com";
	$url = "https://www.google.com/calendar/feeds/".$email."/public/full";
	$xml = file_get_contents($url);

	$feed = simplexml_load_string($xml);
	$ns=$feed->getNameSpaces(true);
	date_default_timezone_set('America/Los_Angeles');
    $todayTitles = null;

	function isToday($time)	{
		return ($time->format('Y-m-d') === date('Y-m-d'));
	}

	foreach ($feed->entry as $entry) {
	    $when=$entry->children($ns["gd"]);
	    $when_atr=$when->when[0]->attributes();

	    $title=$entry->title;
	    $start = new DateTime($when_atr['startTime']);
	    $end = new DateTime($when_atr['endTime']);

		if(isToday($start)) {
			$todayTitles[] = $title;
			$todayStarts[] = $start;
			$todayEnds[] = $end;
            array_multisort($todayStarts, SORT_ASC, $todayTitles, $todayEnds);
		}
	}

    function calendarData() {
        global $todayTitles, $todayStarts, $todayEnds;
        if($todayTitles != null) {
            foreach($todayStarts as $index => $todayStart) {
                $interval = $todayStart->diff($todayEnds[$index]);
                if($interval->format('%a') == 1) {
                    echo "<p class='title'>" . ucwords($todayTitles[$index]) . "</p><p class='time'>All Day<p/>";
                }
                else {
                    echo "<p class='title'>" . ucwords($todayTitles[$index]) . "</p><p class='time'>" . $todayStart->format('g:i A')  . " to " . $todayEnds[$index]->format('g:i A') . "<p/>";
                }
            }
        }
        else {
            echo "<p class='title'>Nothing Today!</p>";
        }
    }
?>