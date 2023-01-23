<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function items():BelongsTo
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
