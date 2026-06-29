<?php

namespace App\Models;

use Database\Factories\CertificateFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['url', 'name', 'download_filename'])]

/**
 * @mixin Builder
 */
class Certificate extends Model
{
    /** @use HasFactory<CertificateFactory> */
    use HasFactory, SoftDeletes;
}
