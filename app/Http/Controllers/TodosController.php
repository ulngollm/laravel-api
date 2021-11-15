<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{

    public function getAll(Request $request)
    {
        $query = Todo::query();
        if ($request->topic) {
            $query->where('topic', $request->topic);
        }
        if ($request->timeline) {
            $query->where('timeline', $request->timeline);
        }
        if ($request->status) {
            $query->where('status', $request->status);
        }
        if (isset($request->active)) {
            if ($request->active == false) {
                $query->whereIn('status', ['complete', 'close']);
            } else  $query->whereNotIn('status', ['complete', 'close']);
        }
        return $query->get();
    }

    public function getOne(Request $request)
    {
        $todo = Todo::find($request->id);
        $status = $todo->status()->first();
        $todo->status = $status->name;
        return $todo;
    }

    public function addOne(Request $request)
    {
        $todo = new Todo;
        foreach ($request->keys() as $key) {
            if ($key == 'list') {
                continue;
            }
            $todo->$key = $request->$key;
        }
        $todo->save();
        $todo->lists()->attach(2);
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
