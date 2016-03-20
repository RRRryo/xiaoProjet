<?php

namespace App\Http\Controllers;


use App\sender;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class sendersController extends Controller
{
    private $max_nb_senders = 50;
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = \Auth::user();
        $senders = $user->senders()->get();
        return view('dashboard.sender.index', compact('senders'));
    }

    public function edit($sender) {
        $user = \Auth::user();
        $sender = $user->senders()->find($sender);
        return view('dashboard.sender.edit', compact('sender'));
    }


    public function create() {
        $user = \Auth::user();
        if ($user->senders()->count() >= $this->max_nb_senders) {
            return redirect('/dashboard/sender')->with('failed', '已经存太多啦，先清理一下吧！');
        }
        return view('dashboard.sender.create');
    }

    public function update(Requests\UpdatesenderRequest $request, $sender){

        $senderDAO = sender::find($sender);
        $senderDAO-> name = $request['name'];
        $senderDAO-> company = $request['company'];
        $senderDAO-> address = $request['address'];
        $senderDAO-> telephone = $request['telephone'];
        $senderDAO-> postal_code = $request['postal_code'];
        $senderDAO-> city = $request['city'];
        $senderDAO-> country = $request['country'];

        $senderDAO->save();

        return redirect('/dashboard/sender')->with('success', '寄件人已更新');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\StoresenderRequest $request) {
        $user = \Auth::user();
        if ($user->senders()->count() >= $this->max_nb_senders) {
            return redirect('/dashboard/sender')->with('failed', '已经存太多啦，先清理一下吧！');
        }

        $user->senders()->create([
            'name' => $request['name'],
            'company' => $request['company'],
            'address' => $request['address'],
            'postal_code' => $request['postal_code'],
            'city' => $request['city'],
            'country' => $request['country'],
            'telephone' => $request['telephone'],
        ]);

        return redirect('/dashboard/sender')->with('success', '新寄件人已创建');
    }



    public function destroy( $sender) {
        $senderDAO = sender::where('id', $sender)
            ->where('user_id', Auth::id());
//        $user->senders()->find($sender);
        $senderDAO->delete();
        return redirect('/dashboard/sender')->with('success', '寄件人已删除');

    }


}
