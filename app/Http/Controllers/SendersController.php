<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

class SendersController extends Controller
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

        return view('dashboard.senders.index', compact('senders'));
    }

    public function edit($senders) {
        $user = \Auth::user();
        $sender = $user->senders()->findOrFail($senders);
        return view('dashboard.senders.edit', compact('sender'));
    }


    public function create() {
        $user = \Auth::user();
        if ($user->senders()->count() >= $this->max_nb_senders) {
            return redirect('/dashboard/senders')->with('failed', '已经存太多啦，先清理一下吧！');
        }
        return view('dashboard.senders.create');
    }

    public function update(Request $request, $senders){
        $this->validateSender($request);

        $user = \Auth::user();
        $sender = $user->senders()->findOrFail($senders);

        $sender-> name = $request['name'];
        $sender-> company = $request['company'];
        $sender-> address = $request['address'];
        $sender-> telephone = $request['telephone'];
        $sender-> postal_code = $request['postal_code'];
        $sender-> city = $request['city'];
        $sender-> country = $request['country'];
        $sender-> note = $request['note'];

        $sender->save();

        return redirect('/dashboard/senders')->with('success', '寄件人已更新');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        $user = \Auth::user();
        if ($user->senders()->count() > $this->max_nb_senders) {
            return redirect('/dashboard/senders')->with('failed', '已经存太多啦，先清理一下吧！');
        }

        $this->validateSender($request);

        $user->senders()->create([
            'name' => $request['name'],
            'company' => $request['company'],
            'address' => $request['address'],
            'postal_code' => $request['postal_code'],
            'city' => $request['city'],
            'country' => $request['country'],
            'telephone' => $request['telephone'],
            'note' => $request['note'],
        ]);

        return redirect('/dashboard/senders')->with('success', '新寄件人已创建');
    }


    public function validateSender( $request) {
        $rules = array(
            'name'       => 'required|max:50',
            'company'      => 'required|max:50',
            'address' => 'required|max:255',
            'postal_code' => 'required|numeric',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'telephone' => 'required|max:50',
            'note' => 'max:500',
        );
        $this->validate($request, $rules);
    }

    public function destroy( $senders) {
        $user = \Auth::user();
        $sender = $user->senders()->findOrFail($senders);
        $sender->delete();
        return redirect('/dashboard/senders')->with('success', '寄件人已删除');

    }


    /*function isOwner($sender_id) {
        $user = \Auth::user();
        $sender = Sender::find($sender_id);
        if($sender !== NULL && $sender->user_id == $user->id) {
            return true;
        }
        return false;;
    }*/
}
