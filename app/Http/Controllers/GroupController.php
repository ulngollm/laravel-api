<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public static array $groups = array(
        array(
            'id' => 1,
            'name' => 'admin'
        ),
        array(
            'id' => 2,
            'name' => 'managers'
        ),
    );

    public function getAll()
    {
        return self::$groups;
    }

    public function getOne(Request $request)
    {
        $id = $request->id;
        $needle = array_filter(self::$groups, function($item) use ($id){
            return $item['id'] == $id;
        });
        return current($needle);
    }
}
