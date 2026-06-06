<?php

namespace App\Models;

use Database\Factories\VacancyFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['icon_url', 'name', 'experience', 'schedule', 'duties', 'requirements', 'conditions', 'min_salary', 'max_salary'])]

/**
 * @mixin Builder
 */
class Vacancy extends Model
{
    /** @use HasFactory<VacancyFactory> */
    use HasFactory;

    protected $casts = [
        'duties' => 'array',
        'requirements' => 'array',
        'conditions' => 'array',
    ];
}
