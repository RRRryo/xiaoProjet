<?php

namespace App\Http\Controllers;

use App\Order;
use App\Recipient;
use App\Sender;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{

    private $orderSender;

    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('owner');
    }

    public function completeSenderForm(Request $request)
    {
        $sender = NULL;
        $user = \Auth::user();
        $senders = $user->senders()->get();
        $userId = $user->id;

        $rules = array(
            'sender_id'       => 'numeric',
        );
        $this->validate($request, $rules);

        if ($request->sender_id !== NULL) {
            $sender = $user->senders()->find($request->sender_id);
        }
        else if ($request->session()->has('order_sender_user_'.$userId)) {
            $sender = session('order_sender_user_'.$userId);
        }
        else {
            $sender = new Sender();
        }

        return view("dashboard.order.sender",compact('senders'),compact('sender'));
    }

    public function saveSenderInfo(Requests\StoreSenderRequest $request)
    {

        $sender = new Sender();
        $sender-> name = $request['name'];
        $sender-> company = $request['company'];
        $sender-> address = $request['address'];
        $sender-> telephone = $request['telephone'];
        $sender-> postal_code = $request['postal_code'];
        $sender-> city = $request['city'];
        $sender-> country = $request['country'];
        $sender-> note = $request['note'];

        $userId = \Auth::user()->id;
        session(['order_sender_user_'.$userId => $sender]);
        return redirect("/dashboard/order_recipient");
    }

    public function completeRecipientForm(Request $request)
    {
        $recipient = NULL;
        $user = \Auth::user();
        $recipients = $user->recipients()->get();
        $userId = $user->id;

        $rules = array(
            'recipient_id'       => 'numeric',
        );
        $this->validate($request, $rules);

        if ($request->recipient_id !== NULL) {
            $recipient = $user->recipients()->find($request->recipient_id);
        }
        else if ($request->session()->has('order_recipient_user_'.$userId)) {
            $recipient = session('order_recipient_user_'.$userId);
        }
        else {
            $recipient = new Sender();
        }

        return view("dashboard.order.recipient",compact('recipients'),compact('recipient'));
    }

    public function saveRecipientInfo(Requests\StoreRecipientRequest $request)
    {

        $recipient = new Recipient();
        $recipient-> name = $request['name'];
        $recipient-> company = $request['company'];
        $recipient-> address = $request['address'];
        $recipient-> telephone = $request['telephone'];
        $recipient-> postal_code = $request['postal_code'];
        $recipient-> city = $request['city'];
        $recipient-> country = $request['country'];
        $recipient-> note = $request['note'];

        $userId = \Auth::user()->id;
        session(['order_recipient_user_'.$userId => $recipient]);

        return redirect("/dashboard/order_items");
    }

    public function completeItemsForm() {
        return view("dashboard.order.items");
    }

    public function saveItemsForm(Requests\StoreOrderRequest $request) {
        $order = new Order();
        $order->real_weight = $request->weightreal;

        $order->length = $request->length;
        $order->width = $request->width;
        $order->height = $request->height;
        $order->type_colis = $request->type_colis;
        $order->dim_weight = $request->weightdim;
        $order->buy_weight = $request->weightbuy;

        /*$order->real_weight = $request->objname;
        $order->real_weight = $request->objpoid;
        $order->real_weight = $request->objnum;
        $order->real_weight = $request->objval;
        $order->real_weight = $request->objpays;*/
        $order->insurance = $request->baoxian;
        $order->insurance_amount = $request->baoxianmoney;

        return view("dashboard.order.order_preview", compact("order"));

    }

    public function listOrders()
    {
        $user = \Auth::user();
        $orders = $user->orders()->get();
        return view("dashboard.order.orders", compact("orders"));
    }

    public function orderDetail($orderId)
    {
        if( Order::where('id', $orderId) ->where('user_id', Auth::id())->exists()) {
            $order = Order::where('id', $orderId)->first();
            return view("dashboard.order.order_detail", compact("order"));

        }
        return listOrders();

    }

}
