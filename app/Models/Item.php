<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "items";

    protected $guarded = ['id'];

    public function order_items()
    {
        return $this->hasMany('\App\Models\OrderItem');
    }
    public function item_stocks()
    {
        return $this->belongsTo('\App\Models\ItemStock');
    }
    public function item_categories()
    {
        return $this->belongsTo('\App\Models\ItemCategory');
    }
    public function reviews()
    {
        return $this->hasMany('\App\Models\Review');
    }
}
