<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    // PLACE NEW ORDER
    public function store (Request $request) {
        $data = $request->validate([
            'id' => 'required|integer',
            'prod_id' => 'required|integer',
            'quantity' => 'required|integer',
            'bill' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'order_status' => 'required|boolean'
        ]);

        $newField = Orders::create([
            'user_id' => $data['id'],
            'product_id' => $data['prod_id'],
            'quantity' => $data['quantity'],
            'bill' => $data['bill'],
            'isActive' => $data['order_status']
        ]);

        if($newField) {
            $response = [
                'message' => 'Order placed successfully',
                'response' => $newField,
            ];
        }
        return response($response, 200);
    }


    // GET ALL ORDERS
    public function getOrders ($id) {
        $user = User::find($id);

        if($user === null) {
            return response([
                'message' => "User not found",
                'payload' => [
                    'error' => 'Id may be invalid'
                ]
            ]);
        } else {
            $orders = $user->orders;
            if($orders === null) {
                return response([
                    'message' => "User hasn't placed any order yet",
                    'payload' => false,
                ], 400);
            }
            $collection = collect($orders);
            $orders_res = [];
            foreach($collection as $order) {
                $order->product;
                $orders_res[] = ['order' => $order];
            }
            $response = [
                'message' => 'Query Successful',
                'orders' => $orders_res,
            ];
        }



        return response($response, 200);

    }



    // CANCEL ORDER
    public function cancel ($id) {
        $cancelled = Orders::where('user_id', $id)->delete();

        if($cancelled) {
            return response([
                'message' => 'Orders Cancelled Successfully',
                'payload' => $cancelled
            ]);
        }
        return response ([
            'message' => 'No orders on this User yet',
            'payload' => $cancelled
        ], 400);
    }
}
