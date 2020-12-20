<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'surveys';

    protected $fillable = ['social_state', 'has_children', 'has_degree', 'has_home', 'gender','birthday','married_year','divorced_year','pay_child_support','charity_donation','home_insurance','stakeholder','incapacitated','seller','tax_report','unemployment_benefits','average_salary','rental_income','withdraw','saving_fund','debts','bank_mortgage','refund'];

    public function offsprings()
    {
        return $this->hasMany(Offspring::class,);
    }

    public function stakeHolderYears()
    {
        return $this->hasMany(StakeHolderYear::class,);
    }

    public function taxReportYears()
    {
        return $this->hasMany(TaxReportYear::class,);
    }

    public function taxRefundYears()
    {
        return $this->hasMany(TaxRefundYear::class,);
    }

    public function workplaceYears()
    {
        return $this->hasMany(WorkplaceYear::class,);
    }

    public function unemploymentYears()
    {
        return $this->hasMany(UnemploymetYear::class,);
    }

    public function feesDrawnYears()
    {
        return $this->hasMany(FeesDrawnYear::class,);
    }
}
