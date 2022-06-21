<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Category;
use App\Models\ProductStock;
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

        $item = Item::create($validatedData);
        //aanmaken stock
        // $table->increments('id');
        //     $table->unsignedInteger('item_id');
        //     $table->foreign('item_id')->references('id')->on('items');
        //     $table->integer('amount')->default(1);


        $stock = ProductStock::create(['item_id' => $item->id, 'amount' => 0 ]);

        //dd($stock);

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
    public function edit($id, $attribute)
    {
        dd($attribute);
        //route('admin.items.edit', [$item->id, $item[$attribute] ])
        $item = Item::findOrFail($id);

        return view('admin.items.edit', compact('item','attribute'));
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



    // New Function Anas

    public function categoryPagination()
    {
        $items = Item::paginate(9);

        return view('frontend.category', compact('items'));
    }

    // public function showSearch(Request $request)
    // {
    //     $search = $request->search;
    //     $items = Item::where('title', 'like', '%' . $search . '%')->all();

    //     return view('frontend.index', compact('items'));
    // }
}