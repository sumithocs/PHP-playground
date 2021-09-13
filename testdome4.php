<?php

function createCheckDigit($membershipId)
{

    $digits = strlen($membershipId);
    //exit;
    $count = 0;
    $total = 0;
    while ($digits > $count) {
        if (($digits - 1) == $count && strlen((string) $total) > 1) {
            $digits = strlen((string) $total);
            $count = 0;
            $membershipId = (string) $total;
        }

        $total += (int) $membershipId[$count];

        $count++;
    }

    return $total;
}

echo createCheckDigit("555555");
