<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
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
        $sender-> email = $request['email'];
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
        /*$user = \Auth::user();
        $userId = $user->id;

        $order = session('order_recipient_user_'.$userId);*/
        return view("dashboard.order.items");
    }

    public function saveItemsForm(Requests\StoreOrderRequest $request) {
        $user = \Auth::user();
        $userId = $user->id;

        $sender = session('order_sender_user_'.$userId);
        $recipient = session('order_recipient_user_'.$userId);

        $order = new Order();

        $order->real_weight = $request->weightreal;

        $order->length = $request->length;
        $order->width = $request->width;
        $order->height = $request->height;
        $order->type_colis = $request->type_colis;
        $order->dim_weight = $this->calculateDimWeight($order->length,$order->width,$order->height);
        $order->buy_weight = $this->calculateBuyWeight($order->real_weight,$order->dim_weight);

        $order->sender_name = $sender->name;
        $order->sender_email = $sender->email;
        $order->sender_address = $sender->address;
        $order->sender_postal_code = $sender->postal_code;
        $order->sender_city = $sender->city;
        $order->sender_country = $sender->country;
        $order->sender_tel = $sender->telephone;

        $order->recipient_name = $recipient->name;
        $order->recipient_address = $recipient->address;
        $order->recipient_postal_code = $recipient->postal_code;
        $order->recipient_city = $recipient->city;
        $order->recipient_country = $recipient->country;
        $order->recipient_tel = $recipient->telephone;

        $order->insurance = $request->baoxian;
        $order->insurance_amount = $request->baoxianmoney;

//        $user->orders()->save($order);

        $items = array();

        $item = new  OrderItem();
        $item->name = $request->objname;
        $item->weight = $request->objpoid;
        $item->quantity = $request->objnum;
        $item->value = $request->objval;
        $item->origin = $request->objpays;

        array_push($items, $item);

//        $order->items()->save($item);

        $objLength = $request->addobjname;
        for($i=0; $i<count($objLength);$i++) {
            $orderItem = new  OrderItem();
            $orderItem->name = $request->addobjname[$i];
            $orderItem->weight = $request->addobjpoid[$i];
            $orderItem->quantity = $request->addobjnum[$i];
            $orderItem->value = $request->addobjval[$i];
            $orderItem->origin = $request->addobjpays[$i];

//            $order->items()->save($orderItem);
            array_push($items, $orderItem);
        }

        session(['order_user_'.$userId => $order]);
        session(['order_items_user_'.$userId => $items]);

        $totalAmount = 0;
        foreach($items as $it) {
            $totalAmount +=  $it->value;
        }

        return view("dashboard.order.order_preview")->with("order",$order)->with("items",$items)->with("totalAmount",$totalAmount);

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

    public function calculateDimWeight($length,$width,$height) {
        return $length*$width*$height/5000;
    }

    public function calculateBuyWeight($realWeight,$dim_weight) {
        $result= max($realWeight,$dim_weight);
        return ceil($result);
    }


    public function createOrder(Request $request) {
        $user = \Auth::user();
        $userId = $user->id;

        $order = session('order_user_'.$userId);
        $items = session('order_items_user_'.$userId);
        $user->orders()->save($order);
        $order->items()->saveMany($items);

        $request->session()->forget('order_user_'.$userId);
        $request->session()->forget('order_items_user_'.$userId);
        $request->session()->forget('order_recipient_user_'.$userId);
        $request->session()->forget('order_sender_user_'.$userId);

        return $this->listOrders();
    }
}
