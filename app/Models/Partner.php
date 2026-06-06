<?php

namespace App\Models;

use Database\Factories\PartnerFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['url'])]

/**
 * @mixin Builder
 */
class Partner extends Model
{
    /** @use HasFactory<PartnerFactory> */
    use HasFactory;
}
