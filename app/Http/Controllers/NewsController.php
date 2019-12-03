<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $new = News::find($request->id);

        return view('news_page',['new' => $new]);
    }
}
