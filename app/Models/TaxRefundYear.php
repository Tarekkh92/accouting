<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRefundYear extends Model
{
    use HasFactory;

    protected $table = 'tax_refund_years';

    protected $fillable = ['year'];

    public function parent()
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}
