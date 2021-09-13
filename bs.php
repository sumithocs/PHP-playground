<?php

declare(strict_types=1);

class BeerSong
{
    /* public function verse(int $number): string
    {
        switch ($number) {
            case 0:
                $verse = "No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.";
                break;

            case 1:
                $verse = "1 bottle of beer on the wall, 1 bottle of beer.\nTake it down and pass it around, no more bottles of beer on the wall.\n";
                break;

            // case 2:
            // $verse = "2 bottles of beer on the wall, 2 bottles of beer.\nTake one down and pass it around, 1 bottle of beer on the wall.\n";
            // break;

            default:
                $bottles = $number > 2 ? "bottles" : "bottle";
                $verse = "$number bottles of beer on the wall, $number bottles of beer.\nTake one down and pass it around, " . ($number - 1) . " $bottles of beer on the wall.\n";
                break;
        }

        return $verse;
    } */

    public function verse(int $number): string
    {
        if ($number == 0) {
            $verse = new NoMoreBottleVerse($number);
            return $verse->verse();
        }

        if ($number == 1) {
            $verse = new LastBottleVerse($number);
            return $verse->verse();
        }

        $verse = new EnoughBottlesVerse($number);
        return $verse->verse();
    }

    public function verses(int $start, int $finish): string
    {
        $verses = [];
        $stock = range($start, $finish);
        foreach ($stock as $beer) {
            $verses[] = $this->verse($beer);
        }
        return implode("\n", $verses);
    }

    public function lyrics(): string
    {
        return $this->verses(99, 0);
    }
}

abstract class Verses
{
    protected $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public abstract function verse(): string;
}

class NoMoreBottleVerse extends Verses
{
    public function verse(): string
    {
        return "No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.";
    }
}

class LastBottleVerse extends Verses
{
    public function verse(): string
    {
        return "1 bottle of beer on the wall, 1 bottle of beer.\nTake it down and pass it around, no more bottles of beer on the wall.\n";
    }
}

class EnoughBottlesVerse extends Verses
{
    public function verse(): string
    {
        $number = $this->number;
        $bottles = $number > 2 ? "bottles" : "bottle";
        return "$number bottles of beer on the wall, $number bottles of beer.\nTake one down and pass it around, " . ($number - 1) . " $bottles of beer on the wall.\n";
    }
}

$song = new BeerSong();

echo $song->lyrics();
