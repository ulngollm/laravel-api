<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{

    public function getAll()
    {
        return Todo::all();
    }

    public function getOne(Request $request)
    {
        return Todo::find($request->id);
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
        $todo = Todo::find($request->id);
        foreach ($request->keys() as $key) {
            $todo->$key = $request->$key;
        }
        $todo->save();
        return response('OK');
    }

    public function deleteById(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->delete();
        return response('OK');
    }
}
