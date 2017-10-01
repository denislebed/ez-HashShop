<?php

namespace App\Http\Controllers;

use App\Category;
use App\GoodOrder;
use App\Good;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller {

    public function index() {
        $orders = Order::orderBy('created_at', 'asc')->get();
        return view('admin.orders', [
            'orders' => $orders
        ]);
    }

    public function destroy(Order $order) {
        $order->delete();
        return redirect('/admin/orders');
    }

    public function order(Order $order, GoodOrder $goodorder) {
        
    }

}
