<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
    [
        'name',
        'slug',
        'brand_id',
        'type_id',
        'photos',
        'features',
        'price',
        'star',
        'review'
    ];

    protected $casts =
    [
        'photos' => 'array'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
