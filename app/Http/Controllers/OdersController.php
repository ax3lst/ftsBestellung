<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Openorder;

class OdersController extends Controller
{
    public function getOrder() {
        return view('orders.getOrder');
    }

    public function shoppingCart($type) {
        $order = \App\Order::where('slug', $type)->firstOrFail();

        if ( ! session()->has('order')) {
            session(['order' => [$order->slug]]);
        } else {
            session()->push('order', $order->slug);
        }

        return redirect('order');
    }

    public function getCheckout() {
        return view('orders.checkout');
    }

    public function orderFinish() {
        $order = session('order');
        $orderString = $this->orderString($order);
        $code = str_random(4);
        Openorder::create(['order' => $orderString, 'code' => $code]);
        session()->flush();
        return view('orders.end')->with('code', $code);
    }

    private function orderString($order) {
        $orderString = '';
        foreach ($order as $value) {
            $orderString = $orderString . $value . '|%';
        }
        return substr($orderString, 0, -2);
    }

    public function openorders() {
        $orders = \App\Openorder::all();
        return view('orders.openorders')->with('orders', $orders);
    }
}
