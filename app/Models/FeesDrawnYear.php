<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesDrawnYear extends Model
{
    use HasFactory;

    protected $table = 'fees_drawn_years';

    protected $fillable = ['year'];

    public function parent()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
