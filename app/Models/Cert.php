<?php

namespace App\Models;

use Database\Factories\CertFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['url', 'name', 'download_filename'])]

/**
 * @mixin Builder
 */
class Cert extends Model
{
    /** @use HasFactory<CertFactory> */
    use HasFactory;
}
