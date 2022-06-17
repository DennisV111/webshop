<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }
    public function item()
    {
        return $this->belongsTo('\App\Models\Item');
    }
}
