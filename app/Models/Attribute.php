<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
    ];


    /**
     * @return mixed
     */
    public static function getActiveAttributes(): mixed
    {
        return self::where('status', true)->get();
    }

    public function sku(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SKU::class)->where('status',true);
    }
}
