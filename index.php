<?php

use DateTime;

function format_dates($dates)
{



    $new_dates = [];
    foreach ($dates as $i => $date) {

        if (preg_match('/\b\d{4}\/\d{2}\/\d{2}\b/', $date)) {
            $format =  'Y/m/d';
        } else if (preg_match('/\b\d{2}\/\d{2}\/\d{4}\b/', $date)) {
            $format = 'm/d/Y';
        } else if (preg_match('/\b\d{2}-\d{2}-\d{4}\b/', $date)) {
            $format = 'm-d-Y';
        }
        $dateObj = DateTime::createFromFormat($format, $date);

        $new_dates[] = $dateObj->format('Ymd');
    }

    return $new_dates;
}


$new = format_dates(["2010/03/30", "15/12/2016", "20130720"]);

var_dump($new);
