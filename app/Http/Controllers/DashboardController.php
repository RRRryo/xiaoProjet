<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/6/2016
 * Time: 4:00 AM
 */

namespace App\Http\Controllers;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view("dashboard/dashboard");
    }

    public function resetPassword()
    {
        return view("dashboard/reset_password");
    }
}