<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    static string $tableName = 'notes';

    public function getAll()
    {
        $categories = DB::table(self::$tableName)->get()->toArray();
        return $categories;
    }

    public function addOne(Request $request)
    {
        DB::table(self::$tableName)->insert($request->toArray());
        return response('OK');
    }

    public function updateById(Request $request)
    {
        DB::table(self::$tableName)
            ->where('id', $request->id)
            ->update($request->toArray());
        return response('OK');
    }

    public function deleteById(Request $request)
    {
        DB::table(self::$tableName)->where('id', $request->id)->delete();
        return response('OK');
    }
}
