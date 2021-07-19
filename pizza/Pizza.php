<?php
include_once ('Db.php');

abstract class Pizza
{
    public static function getPizzaById($id){
        $id = intval($id);
        if($id){
            $db =Db::getConnection();
            $result =$db->query('SELECT pizza from pizza where id='.$id);
            $pizza = $result->fetch();
            return $pizza;
        }
    }
    public static function getSousById($id){
        $id = intval($id);
        if($id){
            $db =Db::getConnection();
            $result =$db->query('SELECT sous from sous where id='.$id);
            $pizzaSous = $result->fetch();
            return $pizzaSous;
        }
    }
    public static function getSizeById($id){
        $id = intval($id);
        if($id){
            $db =Db::getConnection();
            $result =$db->query('SELECT size from size where id='.$id);
            $pizzaSize = $result->fetch();
            return $pizzaSize;
        }
    }

    public static function getPriceById($id){
        $id = intval($id);
        if($id){
            $db =Db::getConnection();
            $result =$db->query('SELECT price from pizza where id='.$id);
            $pizzaPrice = $result->fetch();
            return $pizzaPrice;
        }
    }
}