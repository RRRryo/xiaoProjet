<?php

namespace App\Http\Controllers;

use App\Recipient;
use Illuminate\Http\Request;

use App\Http\Requests;

class RecipientsController extends Controller
{
    public function show()
    {
        $recipients = Recipient::where('user_id', 1);
        return view('/dashboard/recipients', array('recipients' => $recipients));
    }
}
