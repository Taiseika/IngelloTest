<?php

namespace app\controllers\store;

use app\models\Store;
use vendor\core\Controller;

class Product extends Controller
{
    public function createAction()
    {
        echo 'This is createAction page';
        echo '<br>';
        Store::create();
    }
}
