<?php

/* 

Add the missing code to Chicken and Egg so the following actoins are completed:

Chicken implements the Bird interface.
A Chicken lays an egg that will hatch into a new Chicken.
Eggs from other types of birds should hatch into a new bird of their parent type.
Hatching an egg for the second time throws an Exception 

*/


interface Bird
{
    public function layEgg();
}

class Chicken implements Bird
{
    public function layEgg()
    {
        
    }
}

class Egg
{
    public function hatch()
    {
        // TODO
        return NULL
    }
}