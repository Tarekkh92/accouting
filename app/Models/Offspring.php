<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offspring extends Model
{
    use HasFactory;

    protected $table = 'offsprings';

    protected $fillable = ['survey_id','full_name', 'dob', 'under_care', 'pay_for', 'single_parent','with_disabilities','special_education'];

    public function parent()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
