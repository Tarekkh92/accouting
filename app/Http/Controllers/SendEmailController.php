<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMailContact;
use App\Models\Contact;
use App\Models\FeesDrawnYear;
use App\Models\Offspring;
use App\Models\StakeHolderYear;
use App\Models\Survey;
use App\Models\TaxRefundYear;
use App\Models\TaxReportYear;
use App\Models\UnemploymetYear;
use App\Models\WorkplaceYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{

    function index()
    {
        return view('send_email');
    }

    function send(Request $request)
    {
//
         $this->validate($request, [
            //  'وضع' => 'required',
            //  'haveChildren' => 'required',
            //  'degree' => 'required',
            //  'housing' => 'required',
            //  'gender' => 'required',
            //  'dob' => 'required',
            //  'marriageDate' => 'required',
            //  'devorceDate' => 'required',
            //  'pay' => 'required',
            //  'مبارعه' => 'required',
            //  'تامين' => 'required',
            //  'مصلحة' => 'required',
            //  'عاجز' => 'required',
            //  'ضريبة' => 'required',
            //  'تقرير' => 'required',
            //  'gotPay' => 'required',
            //  'salaryRange' => 'required',
            //  'own' => 'required',
            //  'withdraw' => 'required',
            //  'saving_fund' => 'required',
            //  'debt' => 'required',
            //  'inlineRadioOptions1' => 'required',
              'inlineRadioOptions2' => 'required',
         ]);

        $data = array(
            'وضع' => $request->وضع,
            'haveChildren' => $request->haveChildren
        , 'degree' => $request->degree
        , 'housing' => $request->housing
        , 'gender' => $request->gender
        , 'dob' => $request->dob
        , 'marriageDate' => $request->marriageDate
        , 'devorceDate' => $request->devorceDate
        , 'مبارعه' => $request->مبارعه
        , 'تامين' => $request->تامين
        , 'مصلحة' => $request->مصلحة
        , 'عاجز' => $request->عاجز
        , 'ضريبة' => $request->ضريبة
        , 'fourteen' => $request->fourteen
        , 'fifteen' => $request->fifteen
        , 'sixteen' => $request->sixteen
        , 'seventeen' => $request->seventeen
        , 'eighteen' => $request->eighteen
        , 'nineteen' => $request->nineteen
        , 'twenty' => $request->twenty
        , 'تقرير' => $request->تقرير
        , 'fourteen1' => $request->fourteen1
        , 'fifteen1' => $request->fifteen1
        , 'sixteen1' => $request->sixteen1
        , 'seventeen1' => $request->seventeen1
        , 'eighteen1' => $request->eighteen1
        , 'nineteen1' => $request->nineteen1
        , 'twenty1' => $request->twenty1
        , 'fourteen2' => $request->fourteen2
        , 'fifteen2' => $request->fifteen2
        , 'sixteen2' => $request->sixteen2
        , 'seventeen2' => $request->seventeen2
        , 'eighteen2' => $request->eighteen2
        , 'nineteen2' => $request->nineteen2
        , 'twenty2' => $request->twenty2


        , 'pay' => $request->pay
        , 'cname' => $request->cname
        , 'firstChildDate' => $request->firstChildDate
        , 'protection' => $request->protection
        , 'supply' => $request->supply
        , 'single' => $request->single
        , 'needs' => $request->needs
        , 'specialNeeds' => $request->specialNeeds

        , 'cname1' => $request->cname1
        , 'firstChildDate1' => $request->firstChildDate1
        , 'protection1' => $request->protection1
        , 'supply1' => $request->supply1
        , 'single1' => $request->single1
        , 'needs1' => $request->needs1
        , 'specialNeeds1' => $request->specialNeeds1

        , 'cname2' => $request->cname2
        , 'firstChildDate2' => $request->firstChildDate2
        , 'protection2' => $request->protection2
        , 'supply2' => $request->supply2
        , 'single2' => $request->single2
        , 'needs2' => $request->needs2
        , 'specialNeeds2' => $request->specialNeeds2


        , 'cname4' => $request->cname4
        , 'firstChildDate4' => $request->firstChildDate4
        , 'protection4' => $request->protection4
        , 'supply4' => $request->supply4
        , 'single4' => $request->single4
        , 'needs4' => $request->needs4
        , 'specialNeeds4' => $request->specialNeeds4


        , 'cname3' => $request->cname3
        , 'firstChildDate3' => $request->firstChildDate3
        , 'protection3' => $request->protection3
        , 'supply3' => $request->supply3
        , 'single3' => $request->single3
        , 'needs3' => $request->needs3
        , 'specialNeeds3' => $request->specialNeeds3
        , 'gotPay' => $request->gotPay
        , 'own' => $request->own
        , 'withdraw' => $request->withdraw
        , 'debt' => $request->debt
        , 'inlineRadioOptions' => $request->inlineRadioOptions
        , 'inlineRadioOptions1' => $request->inlineRadioOptions1

        , 'work1' => $request->work1
        , 'work2' => $request->work2
        , 'work3' => $request->work3
        , 'work4' => $request->work4
        , 'work5' => $request->work5
        , 'work6' => $request->work6

        , 'a' => $request->a
        , 'b' => $request->b
        , 'c' => $request->c
        , 'd' => $request->d
        , 'e' => $request->e
        , 'f' => $request->f
        , 'g' => $request->g
        , 'salaryRange' => $request->salaryRange
        , 'a1' => $request->a1
        , 'a2' => $request->a2
        , 'a3' => $request->a3
        , 'a4' => $request->a4
        , 'a5' => $request->a5
        , 'a6' => $request->a6
        , 'a7' => $request->a7
        , 'box' => $request->box

        );

        $survey = new Survey();

        $survey->social_state = $request->وضع;
        $survey->has_children = $request->haveChildren;
        $survey->has_degree = $request->degree;
        $survey->has_home = $request->housing;
        $survey->gender = $request->gender;
        $survey->birthday = $request->dob;
        $survey->married_year = $request->marriageDate;
        $survey->divorced_year = $request->devorceDate;
        $survey->pay_child_support = $request->pay;
        $survey->charity_donation = $request->مبارعه;
        $survey->home_insurance = $request->تامين;
        $survey->stakeholder = $request->مصلحة;
        $survey->incapacitated = $request->عاجز;
        $survey->seller = $request->ضريبة;
        $survey->tax_report = $request->تقرير;
        $survey->unemployment_benefits = $request->gotPay;
        $survey->average_salary = $request->salaryRange;
        $survey->rental_income = $request->own;
        $survey->withdraw = $request->withdraw;
        $survey->saving_fund = $request->saving_fund;
        $survey->debts = $request->debt;
        $survey->bank_mortgage = $request->inlineRadioOptions1;
//        $survey->refund = $request->refund;

        $survey->save();
        $survey->refresh();


        if ($request->childName1 != null) {
            $offspring1 = new Offspring();

            $offspring1->full_name = $request->childName1;
            $offspring1->dob = $request->childDate1;
            $offspring1->under_care = $request->childProtection1;
            $offspring1->pay_for = $request->childSupply1;
            $offspring1->single_parent = $request->childSingle1;
            $offspring1->with_disabilities = $request->childNeeds1;
            $offspring1->special_education = $request->childSpecialNeeds1;

            $survey->offsprings()->save($offspring1);
        }
        if ($request->childName2 != null) {
            $offspring2 = new Offspring();

            $offspring2->full_name = $request->childName2;
            $offspring2->dob = $request->childDate2;
            $offspring2->under_care = $request->childProtection2;
            $offspring2->pay_for = $request->childSupply2;
            $offspring2->single_parent = $request->childSingle2;
            $offspring2->with_disabilities = $request->childNeeds2;
            $offspring2->special_education = $request->childSpecialNeeds2;

            $survey->offsprings()->save($offspring2);
        }

        if ($request->childName3 != null) {
            $offspring3 = new Offspring();

            $offspring3->full_name = $request->childName3;
            $offspring3->dob = $request->childDate3;
            $offspring3->under_care = $request->childProtection3;
            $offspring3->pay_for = $request->childSupply3;
            $offspring3->single_parent = $request->childSingle3;
            $offspring3->with_disabilities = $request->childNeeds3;
            $offspring3->special_education = $request->childSpecialNeeds3;

            $survey->offsprings()->save($offspring3);
        }

        if ($request->childName4 != null) {
            $offspring4 = new Offspring();

            $offspring4->full_name = $request->childName4;
            $offspring4->dob = $request->childDate4;
            $offspring4->under_care = $request->childProtection4;
            $offspring4->pay_for = $request->childSupply4;
            $offspring4->single_parent = $request->childSingle4;
            $offspring4->with_disabilities = $request->childNeeds4;
            $offspring4->special_education = $request->childSpecialNeeds4;

            $survey->offsprings()->save($offspring4);
        }

        if ($request->childName5 != null) {

            $offspring5 = new Offspring();

            $offspring5->full_name = $request->childName5;
            $offspring5->dob = $request->childDate5;
            $offspring5->under_care = $request->childProtection5;
            $offspring5->pay_for = $request->childSupply5;
            $offspring5->single_parent = $request->childSingle5;
            $offspring5->with_disabilities = $request->childNeeds5;
            $offspring5->special_education = $request->childSpecialNeeds5;

            $survey->offsprings()->save($offspring5);
        }

        if ($request->stakeHolderYear2014 == true) {
            $survey->stakeHolderYears()->save(new StakeHolderYear(['year' => '2014']));
        }

        if ($request->stakeHolderYear2015 == true) {
            $survey->stakeHolderYears()->save(new StakeHolderYear(['year' => '2015']));
        }

        if ($request->stakeHolderYear2016 == true) {
            $survey->stakeHolderYears()->save(new StakeHolderYear(['year' => '2016']));
        }

        if ($request->stakeHolderYear2017 == true) {
            $survey->stakeHolderYears()->save(new StakeHolderYear(['year' => '2017']));
        }

        if ($request->stakeHolderYear2018 == true) {
            $survey->stakeHolderYears()->save(new StakeHolderYear(['year' => '2018']));
        }

        if ($request->stakeHolderYear2019 == true) {
            $survey->stakeHolderYears()->save(new StakeHolderYear(['year' => '2019']));
        }

        if ($request->stakeHolderYear2020 == true) {
            $survey->stakeHolderYears()->save(new StakeHolderYear(['year' => '2020']));
        }


        if ($request->taxReport2014 == true) {
            $survey->taxReportYears()->save(new TaxReportYear(['year' => '2014']));
        }

        if ($request->taxReport2015 == true) {
            $survey->taxReportYears()->save(new TaxReportYear(['year' => '2015']));
        }

        if ($request->taxReport2016 == true) {
            $survey->taxReportYears()->save(new TaxReportYear(['year' => '2016']));
        }

        if ($request->taxReport2017 == true) {
            $survey->taxReportYears()->save(new TaxReportYear(['year' => '2017']));
        }

        if ($request->taxReport2018 == true) {
            $survey->taxReportYears()->save(new TaxReportYear(['year' => '2018']));
        }

        if ($request->taxReport2019 == true) {
            $survey->taxReportYears()->save(new TaxReportYear(['year' => '2019']));
        }

        if ($request->taxReport2020 == true) {
            $survey->taxReportYears()->save(new TaxReportYear(['year' => '2020']));
        }


        if ($request->taxRefund2014 == true) {
            $survey->taxRefundYears()->save(new TaxRefundYear(['year' => '2014']));
        }

        if ($request->taxRefund2015 == true) {
            $survey->taxRefundYears()->save(new TaxRefundYear(['year' => '2015']));
        }

        if ($request->taxRefund2016 == true) {
            $survey->taxRefundYears()->save(new TaxRefundYear(['year' => '2016']));
        }

        if ($request->taxRefund2017 == true) {
            $survey->taxRefundYears()->save(new TaxRefundYear(['year' => '2017']));
        }

        if ($request->taxRefund2018 == true) {
            $survey->taxRefundYears()->save(new TaxRefundYear(['year' => '2018']));
        }

        if ($request->taxRefund2019 == true) {
            $survey->taxRefundYears()->save(new TaxRefundYear(['year' => '2019']));
        }

        if ($request->taxRefund2020 == true) {
            $survey->taxRefundYears()->save(new TaxRefundYear(['year' => '2020']));
        }


        if ($request->work2014!=null){
            $survey->workplaceYears()->save(new WorkplaceYear(['year' => '2014', 'workplace' => $request->work2014]));
        }

        if ($request->work2015!=null){
            $survey->workplaceYears()->save(new WorkplaceYear(['year' => '2015', 'workplace' => $request->work2015]));
        }

        if ($request->work2016!=null){
            $survey->workplaceYears()->save(new WorkplaceYear(['year' => '2016', 'workplace' => $request->work2016]));
        }

        if ($request->work2017!=null){
            $survey->workplaceYears()->save(new WorkplaceYear(['year' => '2017', 'workplace' => $request->work2017]));
        }

        if ($request->work2018!=null){
            $survey->workplaceYears()->save(new WorkplaceYear(['year' => '2018', 'workplace' => $request->work2018]));
        }

        if ($request->work2019!=null){
            $survey->workplaceYears()->save(new WorkplaceYear(['year' => '2019', 'workplace' => $request->work2019]));
        }


        if ($request->unemployment2014 == true) {
            $survey->unemploymentYears()->save(new UnemploymetYear(['year' => '2014']));
        }

        if ($request->unemployment2015 == true) {
            $survey->unemploymentYears()->save(new UnemploymetYear(['year' => '2015']));
        }

        if ($request->unemployment2016 == true) {
            $survey->unemploymentYears()->save(new UnemploymetYear(['year' => '2016']));
        }

        if ($request->unemployment2017 == true) {
            $survey->unemploymentYears()->save(new UnemploymetYear(['year' => '2017']));
        }

        if ($request->unemployment2018 == true) {
            $survey->unemploymentYears()->save(new UnemploymetYear(['year' => '2018']));
        }

        if ($request->unemployment2019 == true) {
            $survey->unemploymentYears()->save(new UnemploymetYear(['year' => '2019']));
        }

        if ($request->unemployment2020 == true) {
            $survey->unemploymentYears()->save(new UnemploymetYear(['year' => '2020']));
        }


        if ($request->feesDrawn2014 == true) {
            $survey->feesDrawnYears()->save(new FeesDrawnYear(['year' => '2014']));
        }

        if ($request->feesDrawn2015 == true) {
            $survey->feesDrawnYears()->save(new FeesDrawnYear(['year' => '2015']));
        }

        if ($request->feesDrawn2016 == true) {
            $survey->feesDrawnYears()->save(new FeesDrawnYear(['year' => '2016']));
        }

        if ($request->feesDrawn2017 == true) {
            $survey->feesDrawnYears()->save(new FeesDrawnYear(['year' => '2017']));
        }

        if ($request->feesDrawn2018 == true) {
            $survey->feesDrawnYears()->save(new FeesDrawnYear(['year' => '2018']));
        }

        if ($request->feesDrawn2019 == true) {
            $survey->feesDrawnYears()->save(new FeesDrawnYear(['year' => '2019']));
        }

        if ($request->feesDrawn2020 == true) {
            $survey->feesDrawnYears()->save(new FeesDrawnYear(['year' => '2020']));
        }

        $survey->save();

        Mail::send(new SendMail($data),[],function($message){ $message->from('fin.servico@gmail.com')->to('fin.servico@gmail.com')->subject('laravel mail'); });
        Mail::to('fin.servico@gmail.com')->send(new SendMail($data));
       


        return back()->with('success', 'شكرا على الاتصال  معنا');

    }


    function contact(Request $request)
    {
        $this->validate($request, [
            'contactName' => 'required'
            , 'idnumber' => 'required'
            , 'travel' => 'required'
            , 'wifename' => 'required'
            , 'idwife' => 'required'
            , 'wifetravel' => 'required'
            , 'agree' => 'required'
        ]);


        $data = array(
            'contactName' => $request->contactName
        , 'idnumber' => $request->idnumber
        , 'travel' => $request->travel
        , 'wifename' => $request->wifename
        , 'idwife' => $request->idwife
        , 'wifetravel' => $request->wifetravel

        );

        $contact = new Contact();

        $contact->contactName = $request->contactName;
        $contact->idnumber = $request->idnumber;
        $contact->travel = $request->travel;
        $contact->wifename = $request->wifename;
        $contact->idwife = $request->idwife;
        $contact->wifetravel = $request->wifetravel;

        $contact->save();
        Mail::send(new SendMail($data),[],function($message){ $message->from('fin.servico@gmail.com')->to('fin.servico@gmail.com')->subject('laravel mail'); });
        Mail::to('fin.servico@gmail.com')->send(new SendMailContact($data));
        // Mail::send('welcome',new SendMail($data),function($message){ $message->from('fin.servico@gmail.com')->to('fin.servico@gmail.com')->subject('laravel mail'); });
       
       return back()->with('success', 'Thanks for contacting us!');

    }
}
