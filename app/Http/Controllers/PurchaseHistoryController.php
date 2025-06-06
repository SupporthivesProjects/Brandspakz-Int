<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laracasts\Flash\Flash;

class PurchaseHistoryController extends Controller
{
    public function index()
    {
        try {
            $orders = Order::userPurchaseHistory(Auth::user()->id);
            return view('frontend.purchase_history', compact('orders'));
        } catch (\Exception $e) {
            Log::error('Purchase history error: ' . $e->getMessage());
            Flash::error('Unable to load purchase history');
            return redirect()->route('dashboard');
        }
    }

    
    public function purchase_history_details($id)
    {
        try {
            $order = Order::findOrFail($id);
    
            $order->update([
                'delivery_viewed' => 1,
                'payment_status_viewed' => 1
            ]);
    
            return view('frontend.order_details_customer', compact('order'));
    
        } catch (\Exception $e) {
            \Log::error('Order details error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Unable to load order details.');
        }
    }


    public static function order_quantity($order_id)
    {
        try {
            return OrderDetail::where('order_id', $order_id)->sum('quantity');
        } catch (\Exception $e) {
            Log::error('Order quantity calculation error: ' . $e->getMessage());
            return 0;
        }
    }
}
