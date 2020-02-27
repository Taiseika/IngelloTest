<?php

namespace app\models;

class Store
{
    public static function create ()
    {
        if (isset($_GET['id'])) {
            echo $id = 'ID из Get запросса = '.$_GET['id'];
            return $id;
        }
    }
}