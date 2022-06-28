<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Item;
use App\Models\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/thankyou');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create(
            [
                'first_name'        => $request->input(key: 'first_name'),
                'last_name'         => $request->input(key: 'last_name'),
                'city'              => $request->input(key: 'city'),
                'street_address'    => $request->input(key: 'street_address'),
                'postal_code'       => $request->input(key: 'postal_code'),
                'role'              => 'user',
                'email'             => $request->input(key: 'email'),
                'password'          => bcrypt($request->input(key: 'password')),
            ]
        );

        $order = Order::create(
            [
                'user_id'           => $user->id,
                'status_id'         => 1,
                'total'             => Cart::total(),
                'order_date'        => date('Y-m-d'),
                'shipping_method'   => 'plain',
            ]


        );

        foreach (Cart::content() as $item) {
            $order_item = OrderItem::create(
                [
                    'item_id'        => $item->id,
                    'quantity'       => $item->qty,
                    'price'          => $item->price * $item->qty,
                    'order_id'       => $order->id,
                    'vat'            => 21,
                ]
            );
        }


        Cart::destroy();

        return redirect()->route('checkout.index')->with('success', 'Order was created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addOrder(Request $request)
    {
        $order = new Order();
        $order->item_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->total = $request->total;
        $order->save();
    }
}