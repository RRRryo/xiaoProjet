<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function home()
    {
        $value="Liang";
        return view("home", compact("value"));
    }

    public function price_list()
    {
        return view("price_list");
    }

    public function tips()
    {
        return view("tips");
    }
}
