<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StakeHolderYear extends Model
{
    use HasFactory;

    protected $table = 'stakeholder_years';

    protected $fillable = ['year'];

    public function parent()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
