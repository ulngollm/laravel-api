<?php

namespace App\Http\Controllers;

use App\Models\NoteList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListsController extends Controller
{
    static string $tableName = 'lists';

    public function getAll()
    {
        $lists = NoteList::all();
        return $lists;
    }

    public function getOne(Request $request)
    {
        $list = NoteList::find($request->id);
        return $list;
    }

    public function addOne(Request $request)
    {
        //TODO request validation
        //todo проверить, есть ли уже такой список
        //https://docs.rularavel.com/docs/8.x/eloquent#retrieving-or-creating-models
        $list = new NoteList();
        $list->name = $request->name;
        $list->type = $request->type;
        $list->save();

        return response('OK');
    }

    public function updateById(Request $request)
    {

        $list = NoteList::find($request->id);
        $list->name = $request->name;
        $list->type = $request->type;
        $list->save();
        return response('OK');
    }

    public function deleteById(Request $request)
    {
        $list = NoteList::find($request->id);
        $list->delete();
        return response('OK');
    }
}
