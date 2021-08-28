<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();
        return $news;
    }
}
