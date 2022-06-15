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
        $items = Item::all();

        return view('frontend.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.index.create');
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

        return view('frontend.index.show', compact('item'));
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