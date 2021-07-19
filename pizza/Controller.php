<?php
include_once ('Pizza.php');
include_once ('CalculatePizzaCost.php');
class Controller
{
    public static function getPizza($pizzaId , $sousId, $sizeId){
        $name = Pizza::getPizzaById($pizzaId);
        $sous = Pizza::getSousById($sousId);
        $size = Pizza::getSizeById($sizeId);
        $price = Pizza::getPriceById($pizzaId);
        $price = CalculatePizzaCost::Calculate($price['price'], $size['size']);
        $result = array(
            'name'=> $name['pizza'],
            'sous'=> $sous['sous'],
            'size'=> $size['size'],
            'price'=>$price,
        );
        return $result;
    }
}
