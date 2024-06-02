<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    //データ一覧ページの表示
        public function index()
    {
        $authors = Author::simplePaginate(4);
        return view('index', ['authors' => $authors]);
    }
}
