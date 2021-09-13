
<?php

function sitehost()
{
    $numbers = range(1, 100);

    foreach ($numbers as $number) {
        if ($number % 3 == 0 && $number % 5 == 0) {
            echo "SiteHost" . PHP_EOL;
        } elseif ($number % 3 == 0) {
            echo "Site" . PHP_EOL;
        } elseif ($number % 5 == 0) {
            echo "Host" . PHP_EOL;
        } else {
            echo $number . PHP_EOL;
        }
    }
}


sitehost();

// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 3 == 0 && $i % 5 != 0) {
//         echo nl2br("Site\n");
//     } elseif ($i % 5 == 0 && $i % 3 != 0) {
//         echo nl2br("Host\n");
//     } elseif ($i % 5 == 0 && $i % 3 == 0) {
//         echo nl2br("SiteHost\n");
//     } else {
//         echo nl2br($i . "\n");
//     }
// }
