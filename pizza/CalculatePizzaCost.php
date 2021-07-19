<?php


abstract class CalculatePizzaCost
{
    public static function Calculate($prise, $size){
        $prise = floatval($prise);
        $size = floatval($size);
        $prise += $prise/$size;
        return round($prise, 1,PHP_ROUND_HALF_UP);
    }

}