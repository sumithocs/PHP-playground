<?php
error_reporting(0);


$jsonString = '[{"name":"eggs", "price": 1}, {"name":"coffee", "price": 9.99}, {"name":"rice", "price": 4.04}]';

sortByPriceAscending($jsonString);

function sortByPriceAscending(string $jsonString): string
{
    $items = json_decode($jsonString);

    usort($items, function ($a, $b) {
        return $a->price < $b->price ? -1 : 1; //Compare the scores
    });

    print_r($items);
    //return json_decode($jsonString);
}
