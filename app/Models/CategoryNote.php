<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNote extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable=[
      'food_category_id','note',
        ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(FoodCategory::class);
    }

}
