<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    static string $tableName = 'todos';

    public function getAll()
    {
        return Todo::all();
    }

    public function addOne(Request $request)
    {
        $todo = new Todo;
        foreach ($request->keys() as $key) {
            $todo->$key = $request->$key;
        }
        $todo->save();
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
