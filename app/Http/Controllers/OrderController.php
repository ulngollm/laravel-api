<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public static array $orders = array(
        array(
            'id' => 1,
            'name' => 'Asf'
        ),
        array(
            'id' => 2,
            'name' => 'Manasdgsdaagers'
        ),
        array(
            'id' => 3,
            'name' => 'blabla'
        ),
    );

    public function getAll()
    {
        return self::$orders;
    }

    public function getOne(Request $request) {
        $id = $request->id;
        $needle = array_filter(self::$orders, function($item) use ($id){
            return $item['id'] == $id;
        });
        return current($needle);
    }
}
