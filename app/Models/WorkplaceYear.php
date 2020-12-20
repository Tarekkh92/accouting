<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkplaceYear extends Model
{
    use HasFactory;

    protected $table = 'workplace_years';

    protected $fillable = ['year','workplace'];

    public function parent()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
