<?php

namespace App\Http\Controllers;


use App\Recipient;
use Illuminate\Http\Request;

use App\Http\Requests;

class RecipientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('owner');
    }


    public function index(Request $request)
    {
        $this->validate($request, [
            'search' => 'max:255'
        ]);
        $search = $request->get('search');
        $user = \Auth::user();

        $recipients = $user->recipients()
            ->where('name', 'like', "%$search%")
            /*->orWhere('company', 'like', "%$search%")
            ->orWhere('address', 'like', "%$search%")
            ->orWhere('telephone', 'like', "%$search%")*/
            ->paginate(10)
            ->appends(['search' => $search]);

        return view('/dashboard/recipients/index', compact('recipients'));
    }

    public function edit($recipients) {
        if ($this->isOwner($recipients)) {
            $recipient = Recipient::find($recipients);
            return view('/dashboard/recipients/edit', compact('recipient'));
        }
        return redirect('/dashboard/recipients')->with('failed', '没有该寄件人');
    }


    public function create() {
        return view('/dashboard/recipients/create');
    }

    public function update(Request $request, $recipients){
        $this->validateRecipient($request);

        if ($this->isOwner($recipients)) {
            $recipient = Recipient::find($recipients);

            $recipient-> name = $request['name'];
            $recipient->save();

            return redirect('/dashboard/recipients')->with('success', '寄件人已更新');
        }
        return redirect('/dashboard/recipients')->with('failed', '寄件人不存在');

    }

    public function store(Request $request) {
        $this->validateRecipient($request);

        $user = \Auth::user();


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
        if ($this->isOwner($recipients)) {
            Recipient::destroy($recipients);
            return redirect('/dashboard/recipients')->with('success', '寄件人已删除');
        } else
            return redirect('/dashboard/recipients')->with('failed', '没有该寄件人');
    }


    function isOwner($recipient_id) {
        $user = \Auth::user();
        $recipient = Recipient::find($recipient_id);
        if($recipient !== NULL && $recipient->user_id == $user->id) {
            return true;
        }
        return false;;
    }
}
