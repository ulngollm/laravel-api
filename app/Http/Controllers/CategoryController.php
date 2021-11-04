<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    static string $tableName = 'category';

    public function getAll()
    {
        $categories = DB::table(self::$tableName)->get()->toArray();
        return $categories;
    }

    public function addOne(Request $request)
    {
        DB::table(self::$tableName)->insert([
            'name'=>$request->name
        ]);
        return response('OK');

    }

    public function updateOne(Request $request)
    {
        DB::table(self::$tableName)
            ->where('id', $request['id'])
            ->update(['name'=>$request['name']]);
        return response('OK');
    }

    public function deleteOne(Request $request)
    {
        DB::table(self::$tableName)->where('id', $request->id)->delete();
        return response('OK');
    }
}
