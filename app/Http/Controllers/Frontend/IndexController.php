<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use App\Models\Item;

class IndexController extends Controller
{
    public function index()
    {
        $skip_category_0 = ItemCategory::skip(0)->first;
        $skip_item_0 = Item::where('status', 1)->where('item_category_id', $skip_category_0->id)->orderBy('id', 'desc')->get();







        return view('frontend.index', compact('skip_category_0', 'skip_item_0'));
    }
}