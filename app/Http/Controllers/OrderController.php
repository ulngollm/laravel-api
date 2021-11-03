<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getAll()
    {
        $orders = DB::table('orders')->get()->toArray();
        return $orders;
    }

    public function getOne(Request $request) {
        $id = $request->id;
        $order =  DB::table('orders')->find($id);
        return $order;
    }
}
