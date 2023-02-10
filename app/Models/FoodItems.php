<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class FoodItems extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image',
        'is_available',
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(FoodCategory::class)->where('status',true);
    }
    public function sku()
    {
        return $this->hasMany(SKU::class,'food_item_id')->where('status',true);
    }


    public function scopedSearch($query)
    {
        return $this->where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhere('category_id', 'like', '%' . $query . '%')
            ->orWhere('image', 'like', '%' . $query . '%')
            ->orWhere('is_available', 'like', '%' . $query . '%');
    }

}
