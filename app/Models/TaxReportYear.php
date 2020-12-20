<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxReportYear extends Model
{
    use HasFactory;

    protected $table = 'tax_report_years';

    protected $fillable = ['year'];

    public function parent()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
