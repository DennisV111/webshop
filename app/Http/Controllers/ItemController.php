<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Category;
use App\Models\ProductStock;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$items = Item::with('stock')->get();
        $items = Item::all();

        //$columns = Schema::getColumnListing(['items','category']);
        //$moreColumns = Schema::getColumnListing('categories');
        //$indexAttributes = array_merge($columns, $moreColumns);
        //$indexAttributes = ['title','author','isbn' , 'category->name', 'stock_id'];

        return view('admin.items.index', compact('items'));

        return view('admin.items.index', compact('items', 'indexAttributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'         => 'required|max:100',
            'author'        => 'required|max:60',
            'category_id'   => 'required',
            'description'   => 'required',
            'language'      => 'required|max:60',
            'isbn'          => 'required|max:20',
            'dimensions'    => 'required|max:60',
            'image_name'    => 'required|max:60',
            'published'     => 'required',
            'format'        => 'required|max:20',
            'pages'         => 'required',
            'price'         => 'required',
            'vat'           => 'required'
        ]);

        $item = Item::create($validatedData);

        ProductStock::create(['item_id' => $item->id, 'amount' => 0]);


        return redirect('/admin/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);
        //$items = Item::with('stock')->get();
        //$attributes = array_keys($item->toArray());
        //$showTableAttributes = array_slice($attributes, 0, count($attributes)-2);

        return view('admin.items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all();

        return view('admin.items.edit', compact(['item', 'categories']));
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
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'author' => 'required|max:60',
            'category_id' => 'required',
            'description' => 'required',
            'language' => 'required|max:60',
            'isbn' => 'required|max:20',
            'dimensions' => 'required|max:60',
            'image_name' => 'required|max:60',
            'published' => 'required',
            'format' => 'required|max:20',
            'pages' => 'required',
            'price' => 'required',
            'vat' => 'required'
        ]);

        Item::whereId($id)->update($validatedData);

        return redirect('/admin/items');
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
        $item = Item::findOrFail($id);
        $item->product_stock->delete();
        $item->delete();

        return redirect('/admin/items');
    }



    // New Functions Anas

    public function showItemPage()
    {

        $items = Item::paginate(12);

        return view('frontend.shop-page', compact('items'));
    }

    public function showDetailPage($title)
    {
        $item = Item::where('title', $title)->firstOrFail();
        $cart = Cart::content();




        return view('frontend.book_details.detail')->with([
            'item' =>  $item,
            'cart' => $cart,

        ]);
    }

    public function findBooks(Request $request)
    {
        $items = null;
        $success = false;

        if (strlen($request->search) >= 3) {
            // $categories = Category::where('name', 'like', '%' . $request->search . '%')->get();
            $items = Item::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('author', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->get();
            $message = $items->count() . ' results found';
            $success = true;
        } else {
            $message = "Enter minimal 3 characters";
        }

        return view('frontend.body.search_results', [
            'items' => $items,
            // 'categories' => $categories,
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function updateQuantity(Request $request, $id)
    {
        // return $request->all();
        Cart::update($id, $request->quantity);

        session()->flash('success', 'Quantity was updated successfully');

        return response()->json(['success' => true]);
    }
}