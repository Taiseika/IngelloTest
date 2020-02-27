<?php

namespace app\models;

class Store
{
    public static function create ()
    {
        debug($_GET);
        if (isset($_GET['id'])) {
            echo $id = 'ID из Get запросса = '.$_GET['id'];
            return $id;
        }
    }
}