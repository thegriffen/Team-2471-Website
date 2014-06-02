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


<div id="first-column">
    <div id="first-block" class="block">
        <div class="image">
            <a href="http://www.firstwa.org/" target="_blank"><img src="images/firstwa_logo.png"></a>
        </div>
        <div class="icon">
            <a href="http://www.firstwa.org/" target="_blank"><img src="images/arrow_link.png"></a>
        </div>
    </div>
    <div id="news-block" class="block">
        <div class="image">
            <a href="content/Newsletter April-May 2014.pdf" target="_blank"><img src="images/newsletter.png"></a>
        </div>
        <div class="icon">
            <a href="content/Newsletter April-May 2014.pdf" target="_blank"><img src="images/arrow_link.png"></a>
        </div>
    </div>
    <div id="trello-block" class="block">
        <div class="image">
            <a href="https://trello.com/" target="_blank"><img src="images/trello_logo.png"></a>
        </div>
        <div class="icon">
            <a href="https://trello.com/" target="_blank"><img src="images/arrow_link.png"></a>
        </div>
    </div>
</div>

<div id="second-column">
    <div id="calendar-block" class="block">
        <div class="image">
            <a href="#" class="topopup"><p class="today">Today:</p>
            <?php calendarData(); ?></a>
        </div>
        <div class="icon">
            <a href="#"><img src="images/arrow_link.png"></a>
        </div>
    </div>
    <div id="contact-block" class="block">
        <p>Contact</p>
        <div class="icon">
            <a href="#"><img src="images/arrow_link.png"></a>
        </div>
    </div>
</div>

<div id="popup-wrapper">
    <div class="close"></div>
    <span class="close-tooltip">Press Esc to Close<span class="arrow"></span></span>
    <div id="popup">
        <div id="calendar">
<!--            <iframe src="https://www.google.com/calendar/embed?src=chsfirst%40gmail.com&ctz=America/Los_Angeles" style="border: 0; margin: 0; padding: 0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>-->
            <iframe src="scripts/restylegc/restylegc.php?src=chsfirst%40gmail.com&color=%234E5D6C&showTitle=0&showTabs=0&showCalendars=0" style="border: 0;" frameborder="0" height="100%" scrolling="no" width="100%"></iframe>
        </div>
    </div>
</div>
<div id="popup-background"></div>

