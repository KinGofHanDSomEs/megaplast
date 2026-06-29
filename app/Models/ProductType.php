<?php

namespace App\Models;

use Database\Factories\ProductTypeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['id','type'])]

/**
 * @mixin Builder
 */
class ProductType extends Model
{
    /** @use HasFactory<ProductTypeFactory> */
    use HasFactory, SoftDeletes;

    public function orders(): HasMany {
        return $this->hasMany(Order::class, 'id', 'type_id');
    }
}
