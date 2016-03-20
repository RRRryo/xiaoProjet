<?php

namespace App\Http\Controllers;


use App\Recipient;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class RecipientsController extends Controller
{
    private $max_nb_recipients = 50;
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = \Auth::user();
        $recipients = $user->recipients()->get();
        return view('dashboard.recipient.index', compact('recipients'));
    }

    public function edit($recipient) {
        $user = \Auth::user();
        $recipient = $user->recipients()->find($recipient);
        return view('dashboard.recipient.edit', compact('recipient'));
    }


    public function create() {
        $user = \Auth::user();
        if ($user->recipients()->count() >= $this->max_nb_recipients) {
            return redirect('/dashboard/recipient')->with('failed', '已经存太多啦，先清理一下吧！');
        }
        return view('dashboard.recipient.create');
    }

    public function update(Requests\UpdateRecipientRequest $request, $recipient){

        $recipientDAO = Recipient::find($recipient);
        $recipientDAO-> name = $request['name'];
        $recipientDAO-> company = $request['company'];
        $recipientDAO-> address = $request['address'];
        $recipientDAO-> telephone = $request['telephone'];
        $recipientDAO-> postal_code = $request['postal_code'];
        $recipientDAO-> city = $request['city'];
        $recipientDAO-> country = $request['country'];

        $recipientDAO->save();

        return redirect('/dashboard/recipient')->with('success', '寄件人已更新');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\StoreRecipientRequest $request) {
        $user = \Auth::user();
        if ($user->recipients()->count() >= $this->max_nb_recipients) {
            return redirect('/dashboard/recipient')->with('failed', '已经存太多啦，先清理一下吧！');
        }

        $user->recipients()->create([
            'name' => $request['name'],
            'company' => $request['company'],
            'address' => $request['address'],
            'postal_code' => $request['postal_code'],
            'city' => $request['city'],
            'country' => $request['country'],
            'telephone' => $request['telephone'],
        ]);

        return redirect('/dashboard/recipient')->with('success', '新寄件人已创建');
    }



    public function destroy( $recipient) {
        $recipientDAO = Recipient::where('id', $recipient)
            ->where('user_id', Auth::id());
//        $user->recipients()->find($recipient);
        $recipientDAO->delete();
        return redirect('/dashboard/recipient')->with('success', '寄件人已删除');

    }

}
