<?php

function dateFormat(array $dates)
{

    foreach ($dates as $date) {
        $date_format = getdateFormat($date);
    }
}

function getdateFormat($string)
{
    if (preg_match('/^\d{4}\/\d{2}\/\d{2}$/', $string))
        return 'Y/m/d';

    if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $string))
        return 'm/d/Y';

    if (preg_match('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/', $string))
        return 'Y-m-d H:i:s';

    if (preg_match('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}\.\d{3}$/', $string))
        return 'Y-m-d H:i:s.v';



    if (preg_match('/^\d{2}\.\d{2}\.\d{4}$/', $string))
        return 'd.m.Y';

    if (preg_match('/\d/', $string)) {
        return false;
    }

    return $string;
}
