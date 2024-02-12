<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/global/favicon.png" type="image/x-icon">
    <title>Calendar | About | Thomas Boxall</title>
    <link rel="stylesheet" href="/global/global.css">
    <link rel="stylesheet" href="cal-styles.css">
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/global/header.php");?>
    <main>
        <h1>Calendar</h1>
        <p>Here's a <span class=italic>Cunning Calendar Widget</span> which allows you to stalk me!. No, seriously, you can stalk me using this!</p>
        <p>I actively use four Google Calendars. This makes it a real pain to track me down to schedule a meeting with me. Google doesn't offer a convenient way to merge multiple calendars into one to make it sharable (as that would make life far too easy); so I've produced this availability tracker.</p>
        <div class="alert-box red">
          <h2>Invalid Data</h2>
          <p>Google, in their infinite wisdom, have changed how sharing works on Google Calendars - thus this widget no longer works. Please contact me if you want to schedule a meeting with me and I'll send you a screenshot of my calendar</p>
          <p>Much sadge :(</p>
      </div>
        <?php
// setup $weekStartDate and $weekEndDate
$thisWeek = new DateTime('Monday this week');
$weekStartDate = new DateTime('Monday this week');
if (isset($_GET['week'])) {
  $weekStartDate = new DateTime($_GET['week']);
}
$weekEndtDate = clone $weekStartDate;
$weekEndtDate->modify('+6 days');

// configure timezones and helper functions
date_default_timezone_set('Europe/London');
function convertToLocalTimezone($datetime) {
  $utc_timezone = new DateTimeZone('UTC');
  $local_timezone = new DateTimeZone('Europe/London');
  $datetime = new DateTime($datetime, $utc_timezone);
  $datetime->setTimezone($local_timezone);
  return $datetime;
}

function updateEventTimeZone($event){
  $event['DTSTART'] = convertToLocalTimezone($event['DTSTART']);
  $event['DTEND'] = convertToLocalTimezone($event['DTEND']);
  return $event;
}

// main body of code to open ICS files and produce $events containing just events for current week (as according to $weekStartDate and $weekEndDate)
$ics_files = array('https://calendar.google.com/calendar/ical/thomasboxall6%40googlemail.com/public/basic.ics', // personal
 'https://calendar.google.com/calendar/ical/thomas.boxall%40woodcraft.org.uk/public/basic.ics', // wcf
 'https://calendar.google.com/calendar/ical/up2108121%40myport.ac.uk/public/basic.ics', // uni
 'https://ith02.port.ac.uk/public/app/rota/php/vcal.php?token=e9e17b976e7cf1e33326735bed2c49bfada1663a' // ith02

);
// use line above in production and line below in local testing as WSL is slow! REMEMBER TO UNCOMMENT THE LINE NOT BEING USED! 
// $ics_files = array('personal.ics', 'uni.ics', 'ut.ics', 'wcf.ics');

$events = array(); // create an array to store the event data

// loop through each .ics file and extract the event data
foreach ($ics_files as $ics_file) {
    $lines = file($ics_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // read the .ics file into an array of lines
    $event = array(); // create an array to store the data for each event
    foreach ($lines as $line) {
        if (strpos($line, 'BEGIN:VEVENT') !== false) {
            $event = array(); // start a new event
        } elseif (strpos($line, 'END:VEVENT') !== false) {
            $checkStart = new DateTime($event['DTSTART']);
            if ($checkStart >= $weekStartDate && $checkStart <= $weekEndtDate){
              $events[] = updateEventTimeZone($event); // add the completed event to the array of events
            }
        } else {
            $parts = explode(':', $line, 2); // split the line into a key and a value
            if (count($parts) == 2) {
                $key = $parts[0];
                $value = $parts[1];
                $event[$key] = $value; // add the key-value pair to the current event
            }
        }
    }
} 

?>



<div class="cal-nav">
  <form method="get">
    <button class="theme-button theme-button-secondary" type="submit" name="week" value="<?php echo $weekStartDate->modify('-1 weeks')->format('Y-m-d'); ?>">Previous week</button>
    <button class="theme-button theme-button-primary" type="submit" name="week" value="<?php echo $thisWeek->format('Y-m-d'); ?>">Current week</button>
    <button class="theme-button theme-button-secondary" type="submit" name="week" value="<?php echo $weekStartDate->modify('+2 weeks')->format('Y-m-d'); ?>">Next week</button>
  </form>
</div>

<?php 
$headerDate = clone $weekStartDate->modify('-1 weeks'); // this line is *really* important (it sets up $headerDate to be manipulated for headers and resets $weekStartDate after button setup)
?>

<table class="cal">
  <thead>
    <tr>
      <th class='cal-time-col'>Time</th>
      <th class='cal-day-col'>Monday<br><?php echo $headerDate->format('jS M'); ?></th>
      <th class='cal-day-col'>Tuesday<br><?php echo $headerDate->modify('+1 day')->format('jS M'); ?></th>
      <th class='cal-day-col'>Wednesday<br><?php echo $headerDate->modify('+1 day')->format('jS M'); ?></th>
      <th class='cal-day-col'>Thursday<br><?php echo $headerDate->modify('+1 day')->format('jS M'); ?></th>
      <th class='cal-day-col'>Friday<br><?php echo $headerDate->modify('+1 day')->format('jS M'); ?></th>
      <th class='cal-day-col'>Saturday<br><?php echo $headerDate->modify('+1 day')->format('jS M'); ?></th>
      <th class='cal-day-col'>Sunday<br><?php echo $headerDate->modify('+1 day')->format('jS M'); ?></th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
    
    for ($hour = 0; $hour < 24; $hour++) { 
      for ($min = 0; $min < 60; $min += 15){
        $newMinVal = ($min==0) ? "00" : strval($min);
        $currTimeString = strval($hour) . $newMinVal;
        
        $rowColourClass = ($min==45)? "cal-event-heavy" : "cal-event-light";
        echo "<tr class='cal-time-row'>";

        // echo the time cell
        if($min==0){
          echo "<td class='cal-time-col' rowspan='4'>" . sprintf('%02d:%02d', $hour, $min) . "</td>";
        }

      ?>
      
        
        <?php for ($day = 0; $day < 7; $day++) {

            $cellStateClass = "cal-event-free";

            $today = clone $weekStartDate;
            $today->modify(' + '.$day.' days');
            foreach ($events as $event) {
              $start = $event['DTSTART'];
              $end = $event['DTEND'];
              if ($start->format('Y-m-d') == $today->format('Y-m-d') && $start->format('Hi') <= $currTimeString && $end->format('Hi') > $currTimeString) {
                $cellStateClass = "cal-event-busy";
              }
            } 
            echo "<td class='cal-event-cell ". $rowColourClass . " ". $cellStateClass . "'> </td>";
         } ?>
      </tr>
    <?php
     }
    } ?>
  </tbody>
</table>
    </main>
</body>
</html>