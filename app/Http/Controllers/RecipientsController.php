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
            ->orWhere('company', 'like', "%$search%")
            ->orWhere('address', 'like', "%$search%")
            ->orWhere('telephone', 'like', "%$search%")
            ->paginate(10)
            ->appends(['search' => $search]);

        return view('/dashboard/recipients/index', compact('recipients'));
    }

    public function edit(Request $id) {
        $recipient = Recipient::find($id);
        return view('/dashboard/recipients/edit', compact('recipient'));
    }

}
