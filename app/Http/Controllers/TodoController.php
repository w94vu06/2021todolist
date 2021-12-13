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

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request)
    {


        $title = $request ->title;
        $content = $request ->content;
        $remark = $request ->remark;

        DB::table("todos")->insert([
            'title' => $title,
            'content' => $content,
            'remark' => $remark
        ]);

        return view('pages.create');
    }

    public function delete(Request $request)
    {
        $id = $request -> delete_id;

        DB::table('todos')->where('id', $id)
            ->delete();
        return redirect()->route('index');
    }
}
