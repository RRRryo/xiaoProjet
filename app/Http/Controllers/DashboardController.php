<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 3/6/2016
 * Time: 4:00 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view("dashboard.overview");
    }

    public function showResetPasswordForm()
    {
        return view("dashboard.reset_password");
    }

    public function resetPassword(Request $request)
    {
        $this->validate($request, [
//            'email' => 'required|email',
            'oldPassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $credentials = $request->only(
            'email', 'oldPassword',  'password', 'password_confirmation'
        );
        $user = \Auth::user();
//        if ($user->password === bcrypt($credentials['oldPassword'])) {
        if (\Auth::attempt(['email' => $user->email, 'password' => $credentials['oldPassword']])) {
            $user->password = bcrypt($credentials['password']);
            $user->save();
            return redirect("/dashboard/overview")->with('message', '密码修改成功!');
        } else {
            return redirect('/dashboard/reset_password')->with('message', '原密码不正确!');
        }

    }

}