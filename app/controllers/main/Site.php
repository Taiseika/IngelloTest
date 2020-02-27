<?php

namespace app\controllers\main;

use app\models\Store;
use vendor\core\Controller;

class Site extends Controller
{
    public function indexAction ()
    {
        echo 'This is Site index page<br>';
        Store::create();
    }
}
