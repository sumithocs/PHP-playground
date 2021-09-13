<?php

function sitehost()
{
    $numbers = range(1, 100);

    foreach ($numbers as $number) {

        //if ($number % 3 == 0 && $number % 5 == 0) {
        if ($number % 15 == 0) {
            echo "SiteHost" . PHP_EOL;
            continue;
        }

        if ($number % 3 == 0) {
            echo "Site" . PHP_EOL;
            continue;
        }

        if ($number % 5 == 0) {
            echo "Host" . PHP_EOL;
            continue;
        }

        echo $number . PHP_EOL;

        /* if ($number % 15 == 0) {
            echo "SiteHost" . PHP_EOL;
        } elseif ($number % 3 == 0) {
            echo "Site" . PHP_EOL;
        } elseif ($number % 5 == 0) {
            echo "Host" . PHP_EOL;
        } else {
            echo $number . PHP_EOL;
        } */
    }
}

sitehost();
