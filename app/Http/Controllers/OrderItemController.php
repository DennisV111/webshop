<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cart = Cart::content();
        // dd($cart);
        return view('shopping-cart', compact('cart'));
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

        $duplicates = Cart::search(function ($item, $rowId) use ($request) {
            return $item->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('orderItem.index')->with('success', 'Item is already in your cart!');
        }

        $item = Item::findOrFail($request->input(key: 'item_id'));
        Cart::add(
            $item->id,
            $item->title,
            $request->input(key: 'quantity', default: 1),
            $item->price,
        )
            ->associate('App\Models\Item');
        $item->save();

        return redirect()->route('orderItem.index')->with('success', 'Item was added to your cart!');
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
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }

    // public function empty()
    // {
    //     Cart::destroy();


    // }

    // public function checkout()
    // {
    //     $cart = Cart::where('user_id', auth()->id())->get();
    //     foreach ($cart as $cartItem) {
    //         $item = Item::find($cartItem->item_id);
    //         if (! $item || $item->)

    //     }
    // }
}