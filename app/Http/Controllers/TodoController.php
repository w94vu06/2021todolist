<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $data = DB::table('todos')->get();
//        dd($data);
        return view('pages.index',compact('data',$data));
    }

        return view('pages.index');
    }
}
