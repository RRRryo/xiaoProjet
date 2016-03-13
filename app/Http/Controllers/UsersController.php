<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Stripe\Stripe;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('owner');
    }

    public function showChargeFrom()
    {
        return view('dashboard.charge');
    }

    public function charge(Request $request)
    {
        $rules = array(
            'amount'       => 'required',
        );
        $this->validate($request, $rules);

        $user = \Auth::user();
        $token = $_POST['stripeToken'];
        if ( ! $user->charge($request->amount, [
            'source' => $token,
            'receipt_email' => $user->email,])) {
            return redirect('/dashboard/')->with('failed', '充值失败');
        }
        $this->addBalance($request->amount, 'charge');
        return redirect('/dashboard/')->with('success', '充值成功');
    }

    public function showPayForm(Request $request){
        return view('dashboard.order');
    }

    public function pay(Request $request)
    {
        $user = \Auth::user();
        $token = $_POST['stripeToken'];
        if ( ! $user->charge(100, [
            'source' => $token,
            'receipt_email' => $user->email,])) {
            return redirect('/dashboard/')->with('failed', '支付失败');
        }
        return redirect('/dashboard/')->with('success', '支付OK');

    }

    public function showBalances(Request $request) {
        $user = \Auth::user();
        $final_balance = $user->balance;
        $balances = $user->balances()->get();
        return view('dashboard.balances', compact('balances','final_balance'));
    }

    public function addBalance($amount, $description){
        $amount /=100;
        $user = \Auth::user();
        $user->balance += $amount;
        $user->save();
        $user->balances()->create([
            'balance' => $amount,
            'description' => $description,
        ]);
    }

    public function editProfile(){
        $user = \Auth::user();
        return view('dashboard.profile', compact('user'));
    }

    public function updateProfile(Request $request){
        $rules = array(
            'name'       => 'required|max:50',
            'address' => 'required|max:255',
            'postal_code' => 'required|numeric',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'telephone' => 'required|max:50',
        );

        $this->validate($request, $rules);

        $user = \Auth::user();

        $user-> name = $request['name'];
        $user-> address = $request['address'];
        $user-> telephone = $request['telephone'];
        $user-> postal_code = $request['postal_code'];
        $user-> city = $request['city'];
        $user-> country = $request['country'];

        $user->save();
        return view('dashboard.profile', compact('user'))->with("success","我的资料已经保存");
    }
}
