<?php

class Bob
{
    public function respondTo(string $str)
    {
        return ctype_upper($str);
    }
}

$bob =  new Bob();

var_dump($bob->respondTo("ADHDH!"));
