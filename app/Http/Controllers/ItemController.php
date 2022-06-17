<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use Illuminate\Support\Facades\DB;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$items = Item::all();
        $items = Item::with('item_category')->get();

        $indexAttributes = ['title', 'author', 'isbn', 'item_category->name', 'stock_id'];

        return view('admin.items.index', compact('items', 'indexAttributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create');
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
            'item_category_id' => 'required',
            'stock_id' => 'required',
            'title' => 'required|max:60',
            'author' => 'required|max:60',
            'description' => 'required|max:60',
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
        $item = Item::create($validatedData);

        return redirect('/items');
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

        $attributes = array_keys($item->toArray());
        $showTableAttributes = array_slice($attributes, 0, count($attributes) - 2);

        return view('admin.items.show', compact('item', 'showTableAttributes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $attribute)
    {
        dd($attribute);
        //route('admin.items.edit', [$item->id, $item[$attribute] ])
        $item = Item::findOrFail($id);

        return view('admin.items.edit', compact('item', 'attribute'));
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



    // New Functions Anas

    public function showItemPage()
    {
        $items = Item::paginate(12);

        return view('frontend.shop-page', compact('items'));
    }

    public function showDetailPage($title)
    {
        $item = Item::where('title', $title)->firstOrFail();


        return view('frontend.book_details.detail', compact('item'));
    }



    public function basket()
    {
        return view('shopping-cart');
    }

    public function addToCart($id)
    {
        $item = Item::find($id);
        if (!$item) {
            abort(404);
        }
        $basket = session()->get('basket');
        // if basket is empty then this the first item
        if (!$basket) {
            $basket = [
                $id => [
                    "name" => $item->title,
                    "item_qty" => 1,
                    "price" => $item->price,
                    "author" => $item->author,
                    "item_img" => $item->image_name
                ]
            ];
            session()->put('basket', $basket);
            return redirect()->back()->with('success', 'Item added to basket successfully!');
        }
        // if basket not empty then check if this item exist then increment item_qty
        if (isset($basket[$id])) {
            $basket[$id]['item_qty']++;
            session()->put('basket', $basket);
            return redirect()->back()->with('success', 'Item added to basket successfully!');
        }
        // if item not exist in basket then add to basket with item_qty = 1
        $basket[$id] = [
            "name" => $item->tilte,
            "item_qty" => 1,
            "price" => $item->price,
            "author" => $item->author,
            "item_img" => $item->image_name
        ];
        session()->put('basket', $basket);
        return redirect()->back()->with('success', 'Item added to basket successfully!');
    }

    public function updateCart(Request $request)
    {
        if ($request->id and $request->item_qty) {
            $basket = session()->get('basket');
            $basket[$request->id]["item_qty"] = $request->item_qty;
            session()->put('basket', $basket);
            session()->flash('success', 'Your Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $basket = session()->get('basket');
            if (isset($basket[$request->id])) {
                unset($basket[$request->id]);
                session()->put('basket', $basket);
            }
            session()->flash('success', 'Item removed successfully');
        }
    }
}