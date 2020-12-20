<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->

    <style>
    span{
        color: green;
    }
    body{
        text-align: center;
    }
    table{
        border: 1;
    }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body >
    <p> 
        وضعك الاجتماعي:    

        <span color="green">{{ $data['وضع'] }}</span>
    </p>
    <p> 
       لديك ولاد:  

        <span color="green">{{ $data['haveChildren'] }}</span>
    </p>
    <p> 
        لقب:
 
         <span color="green">{{ $data['degree'] }}</span>
     </p>
     <p> 
       فرص سكن
 
         <span color="green">{{ $data['housing'] }}</span>
     </p>
     <p> 
      :جنسيه
  
          <span color="green">{{ $data['gender'] }}</span>
      </p>
      <p> 
        تاريخ الميلاد
    
            <span color="green">{{ $data['dob'] }}</span>
        </p>
        <p> 
            تاريخ الزواج
        
                <span color="green">{{ $data['marriageDate'] }}</span>
        </p>
        <p> 
            تاريخ الطلاق
        
                <span color="green">{{ $data['devorceDate'] }}</span>
        </p>

            <p> 
                هل تدفع نفقة:
            
                    <span color="green">{{ $data['pay'] }}</span>
         </p>
         <div style="overflow-x:auto;" >
         <table border="1" >
            <tr>
              <th>الاسم</th>
              <th>عيد ميلاد </th>
              <th>الولد تحت رعايتي	</th>
              <th>ادفع عنه نفقة		</th>
              <th>انا اب\ ام احادي لهذا الولد	</th>
              <th>ولد ذو عجز\ قدرات خاصة</th>
              <th>اولد يتعلم في تعليم خاص</th>
            </tr>
            <tr>
              <td>  <span color="green">{{ $data['cname'] }}</span> </td>
              <td><span color="green">{{ $data['firstChildDate'] }}</span></td>
              <td> <span color="green">{{ $data['protection'] }}</span></td>
              <td> <span color="green"> {{ $data['supply'] }}</span></td>
              <td>     <span color="green">{{ $data['single'] }}</span></td>
              <td> <span color="green">{{ $data['needs'] }}</span></td>
              <td>   <span color="green"> {{ $data['specialNeeds'] }}</span></td>
            </tr>
            <tr>
                <td>  <span color="green">{{ $data['cname1'] }}</span> </td>
                <td><span color="green">{{ $data['firstChildDate1'] }}</span></td>
                <td> <span color="green">{{ $data['protection1'] }}</span></td>
                <td> <span color="green"> {{ $data['supply1'] }}</span></td>
                <td>     <span color="green">{{ $data['single1'] }}</span></td>
                <td> <span color="green">{{ $data['needs1'] }}</span></td>
                <td>   <span color="green"> {{ $data['specialNeeds1'] }}</span></td>
            </tr>
            <tr>
                <td>  <span color="green">{{ $data['cname2'] }}</span> </td>
                <td><span color="green">{{ $data['firstChildDate2'] }}</span></td>
                <td> <span color="green">{{ $data['protection2'] }}</span></td>
                <td> <span color="green"> {{ $data['supply2'] }}</span></td>
                <td>     <span color="green">{{ $data['single2'] }}</span></td>
                <td> <span color="green">{{ $data['needs2'] }}</span></td>
                <td>   <span color="green"> {{ $data['specialNeeds2'] }}</span></td>
            </tr>
            <tr>
                <td>  <span color="green">{{ $data['cname2'] }}</span> </td>
                <td><span color="green">{{ $data['firstChildDate2'] }}</span></td>
                <td> <span color="green">{{ $data['protection3'] }}</span></td>
                <td> <span color="green"> {{ $data['supply3'] }}</span></td>
                <td>     <span color="green">{{ $data['single3'] }}</span></td>
                <td> <span color="green">{{ $data['needs3'] }}</span></td>
                <td>   <span color="green"> {{ $data['specialNeeds3'] }}</span></td>
            </tr>
            <tr>
                <td>  <span color="green">{{ $data['cname4'] }}</span> </td>
                <td><span color="green">{{ $data['firstChildDate4'] }}</span></td>
                <td> <span color="green">{{ $data['protection4'] }}</span></td>
                <td> <span color="green"> {{ $data['supply4'] }}</span></td>
                <td>     <span color="green">{{ $data['single4'] }}</span></td>
                <td> <span color="green">{{ $data['needs4'] }}</span></td>
                <td>   <span color="green"> {{ $data['specialNeeds4'] }}</span></td>
            </tr>
           
          </table>
        </div>
          {{-- childred --}}


<p> 
    تبرعت لجمعية خيرية ولدي وصل:

        <span>{{ $data['مبارعه'] }}</span>
</p>
<p> 
    ادفع لتامين حياة \ تامين منزل:


        <span>{{ $data['تامين'] }}</span>
</p>
<p> 
    انا \ زوجي لدينا مصلحة خاصة: 


        <span>{{ $data['مصلحة'] }}</span>
</p>
<p> 
    لا انا \ زوجي عاجز بنسبة 90 %على الأقل:  


        <span>{{ $data['عاجز'] }}</span>
</p>
<p> 
    بعت عقار\ أرض ودفعت ضريبة: 

        <span>{{ $data['ضريبة'] }}</span>
</p>
<p> 
    بعت عقار\ أرض ودفعت ضريبة: 

        <span>{{ $data['ضريبة'] }}</span>
</p>
<p> 
    بأي سنوات أنت \ زوجك صاحب مصلحة؟ 
    <br/>
        <span>{{ $data['fourteen'] }},</span>
        <span>{{ $data['fifteen'] }},</span>
       <span>{{ $data['sixteen'] }}</span>
        <span>{{ $data['seventeen'] }},</span>
       <span>{{ $data['eighteen'] }},</span>
       <span>{{ $data['nineteen'] }},</span>
       <span>{{ $data['twenty'] }},</span>
</p>
<p> 
    هل قدمت في الماضي طلب لاسترجاع ضريبة او قدمت تقرير سنوي لضريبة الدخل؟ 
    <br/>
        <span>{{ $data['تقرير'] }}</span>
</p>
<p> 
    في أي سنوات قدمت؟ 
    <br/>
        <span>{{ $data['fourteen1'] }},</span>
        <span>{{ $data['fifteen1'] }},</span>
       <span>{{ $data['sixteen1'] }}</span>
        <span>{{ $data['seventeen1'] }},</span>
       <span>{{ $data['eighteen1'] }},</span>
       <span>{{ $data['nineteen1'] }},</span>
       <span>{{ $data['twenty1'] }},</span>
</p>
<p> 
    لأي سنوات تريد تقديم طلب السترجاع ضريبة؟ 
    <br/>
        <span>{{ $data['fourteen2'] }},</span>
        <span>{{ $data['fifteen2'] }},</span>
       <span>{{ $data['sixteen2'] }}</span>
        <span>{{ $data['seventeen2'] }},</span>
       <span>{{ $data['eighteen2'] }},</span>
       <span>{{ $data['nineteen2'] }},</span>
       <span>{{ $data['twenty2'] }},</span>
</p>
<p> 
    اكتب هنا أماكن العمل التي عملت بها:

    <br/>
        <span>{{ $data['work1'] }},</span>
        <span>{{ $data['work2'] }},</span>
       <span>{{ $data['work3'] }}</span>
        <span>{{ $data['work4'] }},</span>
       <span>{{ $data['work4'] }},</span>
       <span>{{ $data['work6'] }},</span>
      
</p>
<p> 
    كنت عاطل عن العمل خلال السنة 
    <br/>
        <span>{{ $data['a'] }},</span>
        <span>{{ $data['b'] }},</span>
       <span>{{ $data['b'] }}</span>
        <span>{{ $data['d'] }},</span>
       <span>{{ $data['e'] }},</span>
       <span>{{ $data['f'] }},</span>
       <span>{{ $data['g'] }},</span>
      
</p>
<p> 
    كم كان معدل راتبك الشهري في الست سنوات الأخيرة: 
    <br/>
        <span>{{ $data['salaryRange'] }}</span>
</p>


<p> 
    حصلت على دخل ايجار من شقة او محل املكه؟ 
    <br/>
        <span>{{ $data['own'] }}</span>
</p>
<p> 
    كنت عاطل عن العمل خلال السنة 
    <br/>
        <span>{{ $data['a1'] }},</span>
        <span>{{ $data['a2'] }},</span>
       <span>{{ $data['a3'] }}</span>
        <span>{{ $data['a4'] }},</span>
       <span>{{ $data['a5'] }},</span>
       <span>{{ $data['a6'] }},</span>
       <span>{{ $data['a7'] }},</span>
      
</p>
<p> 
    من أي صندوق توفير سحبت؟

    <br/>
        <span>{{ $data['box'] }}</span>
</p>
<p> 
    سحبت اتعابك ومستحقات عمل؟ 
    <br/>
        <span>{{ $data['withdraw'] }}</span>
</p>
<p> 
    هل حسابك الجاري في البنك مرهون؟ 
    <br/>
        <span>{{ $data['inlineRadioOptions'] }}</span>
</p>

<p> 
    هل لديك ديون او ملفات مفتوحة؟ 
    <br/>
        <span>{{ $data['debt'] }}</span>
</p>
<p> 
    هل لديك ديون او ملفات مفتوحة؟ 
    <br/>
        <span>{{ $data['inlineRadioOptions1'] }}</span>
</p>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


{{-- <p>I have some query like {{ $data['message'] }}.</p> --}}
{{-- <p>It would be appriciative, if you gone through this feedback.</p> --}}