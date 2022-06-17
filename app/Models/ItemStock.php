<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemStock extends Model
{
    use HasFactory;

    protected $table = 'item_stocks';

    protected $guarded = ['id'];

    public function item()
    {
        return $this->hasOne('\App\Models\Item');
    }
}
