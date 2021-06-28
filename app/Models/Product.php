<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'products';
    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
    public function brands()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
