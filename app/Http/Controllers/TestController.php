<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    static $tableName = 'test';
    public function test()
    {
        print(php_sapi_name());
        $result = DB::table(self::$tableName)
            ->where('count', '<>', 1)
            ->get();
        return $result;
    }

    public function getAll()
    {
        $result = DB::table(self::$tableName)->get()->toArray();
        return $result;
    }

    public function addOne(Request $request)
    {
        DB::table(self::$tableName)->insert($request->toArray());
        return response('OK');
    }
}
