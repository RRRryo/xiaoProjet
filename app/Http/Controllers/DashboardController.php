<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/6/2016
 * Time: 4:00 AM
 */

namespace App\Http\Controllers;


class Dashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view("dashboard");
    }

}