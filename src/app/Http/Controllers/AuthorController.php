<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Eloquentを使用できるようにAuthorモデルを読み込む
use App\Models\Author;


class AuthorController extends Controller
{
    // データ追加用ページの表示
    public function add()
    {
        return view('add');
    }

    public function create(Request $request){
        $form = $request->all();
        return redirect('/');
    }

    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }
}
