<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::paginate(4);

        // $news = News::all();

        return view('news.index', ['news' => $news]);
    }

    public function show($id)
    {
        $new = News::find($id);

        return view('news.show', ['new' => $new]);
    }
}