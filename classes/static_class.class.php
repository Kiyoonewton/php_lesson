<?php
class Static_class
{
    public static $drinkingAge = 18;
    public static function setDrinkageAge($age)
    {
        self::$drinkingAge = $age;
    }
}
