<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListsController extends Controller
{

    public function getAll()
    {
        $lists = TodoList::all();
        return $lists;
    }

    public function getOne(Request $request)
    {
        $list = TodoList::find($request->id);
        return $list;
    }

    public function addOne(Request $request)
    {
        //TODO request validation
        //todo проверить, есть ли уже такой список
        //https://docs.rularavel.com/docs/8.x/eloquent#retrieving-or-creating-models
        $list = new TodoList();
        foreach ($request->keys() as $key) {
            $list->$key = $request->$key;
        }
        $list->save();

        return response('OK');
    }

    public function updateById(Request $request)
    {

        $list = TodoList::find($request->id);
        foreach ($request->keys() as $key) {
            $list->$key = $request->$key;
        }
        $list->save();
        return response('OK');
    }

    public function deleteById(Request $request)
    {
        $list = TodoList::find($request->id);
        $list->delete();
        return response('OK');
    }
}
