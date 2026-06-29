<?php

namespace App\Models;

use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['icon_url', 'name', 'experience', 'schedule', 'duties', 'requirements', 'conditions', 'min_salary', 'max_salary'])]

/**
 * @mixin Builder
 */
class Job extends Model
{
    /** @use HasFactory<JobFactory> */
    use HasFactory, SoftDeletes;

    protected $casts = [
        'duties' => 'array',
        'requirements' => 'array',
        'conditions' => 'array'
    ];
}
