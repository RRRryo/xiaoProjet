<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

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
        return view('dashboard.recipients.index', compact('recipients'));
    }

    public function edit($recipients) {
        $user = \Auth::user();
        $recipient = $user->recipients()->findOrFail($recipients);
        return view('dashboard.recipients.edit', compact('recipient'));
    }


    public function create() {
        $user = \Auth::user();
        if ($user->recipients()->count() > $this->max_nb_recipients) {
            return redirect('/dashboard/recipients')->with('failed', '已经存太多啦，先清理一下吧！');
        }
        return view('dashboard.recipients.create');
    }

    public function update(Request $request, $recipients){
        $this->validateRecipient($request);

        $user = \Auth::user();
        $recipient = $user->recipients()->findOrFail($recipients);


        $recipient-> name = $request['name'];
        $recipient-> company = $request['company'];
        $recipient-> address = $request['address'];
        $recipient-> telephone = $request['telephone'];
        $recipient-> postal_code = $request['postal_code'];
        $recipient-> city = $request['city'];
        $recipient-> country = $request['country'];

        $recipient->save();

        return redirect('/dashboard/recipients')->with('success', '寄件人已更新');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        $user = \Auth::user();
        if ($user->recipients()->count() >= $this->max_nb_recipients) {
            return redirect('/dashboard/recipients')->with('failed', '已经存太多啦，先清理一下吧！');
        }

        $this->validateRecipient($request);

        $user->recipients()->create([
            'name' => $request['name'],
            'company' => $request['company'],
            'address' => $request['address'],
            'postal_code' => $request['postal_code'],
            'city' => $request['city'],
            'country' => $request['country'],
            'telephone' => $request['telephone'],
        ]);

        return redirect('/dashboard/recipients')->with('success', '新寄件人已创建');
    }


    public function validateRecipient( $request) {
        $rules = array(
            'name'       => 'required|max:50',
            'company'      => 'required|max:50',
            'address' => 'required|max:255',
            'postal_code' => 'required|numeric',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'telephone' => 'required|max:50',
//            'note' => 'max:500',
        );
        $this->validate($request, $rules);
    }

    public function destroy( $recipients) {
        $user = \Auth::user();
        $recipient = $user->recipients()->findOrFail($recipients);
        $recipient->delete();
        return redirect('/dashboard/recipients')->with('success', '寄件人已删除');

    }


    /*function isOwner($recipient_id) {
        $user = \Auth::user();
        $recipient = Recipient::find($recipient_id);
        if($recipient !== NULL && $recipient->user_id == $user->id) {
            return true;
        }
        return false;;
    }*/
}
