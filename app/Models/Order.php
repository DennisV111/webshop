<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $guarded = ['id'];

    public function order_items()
    {
        return $this->hasMany('\App\Models\OrderItem');
    }
    public function order_status()
    {
        return $this->belongsTo('\App\Models\OrderStatus');
    }
    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }
}
