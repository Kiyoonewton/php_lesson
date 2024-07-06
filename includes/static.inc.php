<?php
class Person
{
    public static $drinkingAge = 18;
    public static function setDrinkageAge($age)
    {
        self::$drinkingAge = $age;
    }
}
