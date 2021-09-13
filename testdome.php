<?php

function groupByOwners(array $files): array
{
    $finale = [];
    $names = array_unique(array_values($files));
    foreach ($names as $name) {
        foreach ($files as $file => $name_or) {
            if ($name == $name_or) $finale[$name][] = $file;
        }
    }

    return $finale;
}

$files = array(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(groupByOwners($files));

array_filter($files, function () {
});
