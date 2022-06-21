<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    protected $table = 'order_statusses';

    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasOne('\App\Models\Order');
    }
}
