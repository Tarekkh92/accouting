{{-- begin today  --}}
    <!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Survey</title>
    <style>
        #head {
            /* font-size: xxxx-large; */
            font-weight: bolder;
            font-size: 40px;
            background-image: linear-gradient(45deg, green, lightblue, yellow);

        }

        .heading {
            font-size: xx-large;
            color: blue;
        }

        label {
            font-size: x-large;
        }

        .responsive {
            max-width: 100%;
            height: auto;
        }


        .custom-btn {
            max-width: 100%;
            padding-left: 25px;
            padding-right: 25px;
        }

        h2 {
            text-align: center;
            color: blue;
            font-size: 100px;

        }


        #para {
            font-weight: bolder;
            font-size: 20px;
            color: white;
            background-image: linear-gradient(45deg, white, orange, brown, black);
        }

        th {
            font-weight: bolder;
            font-size: 14px;
        }

        #submit {
            font-size: xx-large;
        }

        input[type='radio'] {
            margin-right: 10px;
            transform: scale(2);
        }

        /* input[type="text"] {
          width: 400px;
          padding: 0 20px;
      }

      input[type="text"],
      input::-webkit-input-placeholder {
          font-size: 20px;
          line-height: 3;
      } */
        /* #error{
          font-size: 32px;
        } */
        .alert-danger {
            font-size: x-large;
        }

        footer {
            background-image: linear-gradient(45deg, blue, purple);
            color: white;
        }

        #formhead {
            color: white;
        }


    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="bg-light">


{{-- carosel --}}


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
{{-- <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol> --}}

<!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="man.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
            <img src="woman.jpg" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
            <img src="man.jpg" alt="New york" style="width:100%;">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- carosel --}}

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
<div class="container">
    <div class="py-5 text-center">
        <h1 id="head">
            أهلا وسهلا بكم في الموقع الخاص بالضرائب وتحصيل المستحقات يرجى ادخال البيانات التالية:
        </h1>
        <p id="para">
            اضغط على ما يلائمك من التالي فيما يخص وضعك الاجتماعي والتعليمي اليوم:

        </p>
    </div>

    <form method="get" action="{{url('sendemail/send')}}">
        {{ csrf_field() }}

        <div id="x">

            <label class="heading col-12 "> اختار وضعك الاجتماعي </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="وضع" value="متزوج">
                <label class="form-check-label" for="inlineRadio1">متزوج</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="وضع" value="مطلق">
                <label class="form-check-label" for="inlineRadio2">مطلق</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name='وضع' value="ارمل">
                <label class="form-check-label" for="inlineRadio2">ارمل</label>
            </div>
            @error('وضع')
            <div class="alert alert-danger mt-1 mb-1">
                اختار وضعك الاجتماعي
            </div>
            @enderror

            <hr class="my-4 col-12">
            <label class="heading col-12"> هل لديك اولاد </label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="haveChildren" id="inlineRadio1" value="نعم">
                <label class="form-check-label" for="inlineRadio1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="haveChildren" id="inlineRadio2" value="لا">
                <label class="form-check-label" for="inlineRadio2">لا</label>
            </div>
            @error('haveChildren')
            <div class="alert alert-danger mt-1 mb-1">
                هل لديك اولاد
            </div>
            @enderror

            <hr class="my-2 col-12">
            <label class="heading col-12"> هل حصلت على لقب أو شهادة جامعية </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="degree" id="inlineRadio1" value="نعم">
                <label class="form-check-label" for="inlineRadio1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="degree" id="inlineRadio2" value="لا">
                <label class="form-check-label" for="inlineRadio2">لا</label>
            </div>
            @error('degree')
            <div class="alert alert-danger mt-1 mb-1">
                هل حصلت على لقب أو شهادة جامعية
            </div>
            @enderror

            <hr class="my-4 col-12">
            <label class="heading col-12"> هل لديكه فرص سكن ؟ </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="housing" id="inlineRadio1" value="نعم">
                <label class="form-check-label" for="inlineRadio1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="housing" id="inlineRadio2" value="لا">
                <label class="form-check-label" for="inlineRadio2">لا</label>
            </div>
            @error('housing')
            <div class="alert alert-danger mt-1 mb-1">
                هل لديكه فرص سكن ؟
            </div>
            @enderror
            <hr class="my-4 col-12">

        </div>
        <div id="y">
            <label class="heading col-12"> جنسيه </label>
            <br/>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="رجل">
                <label class="form-check-label" for="inlineRadio1">رجل</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="امراه">
                <label class="form-check-label" for="inlineRadio2">امراه</label>
            </div>
            @error('gender')
            <div class="alert alert-danger mt-1 mb-1">
                جنسيه
            </div>
            @enderror

            <hr class="my-4 col-12">

            <hr class="my-4 col-12">
            <div class="st_row">
                <label class="heading col-12"> تاريخ الميلاد

                </label>

                <br/>
                <div class="col-3">
                    <input type="date" name="dob" placeholder="Select Date" value="تاريخ الميلاد"/>
                </div>
                @error('dob')
                <div class="alert alert-danger mt-1 mb-1">
                    تاريخ الميلاد
                </div>
                @enderror
            </div>

            <hr class="my-4 col-12">
            <label class="heading col-12"> في أي سنة تزوجت؟</label>
            <input type="date" name="marriageDate" value="تاريخ الزواج"/>
            @error('marriageDate')
            <div class="alert alert-danger mt-1 mb-1">
                في أي سنة تزوجت؟
            </div>
            @enderror

            <hr class="my-4 col-12">
            <label class="heading col-12">في أي سنة تطلقت؟
            </label>
            <input type="date" name="devorceDate"/>
            @error('devorceDate')
            <div class="alert alert-danger mt-1 mb-1">
                في أي سنة تطلقت؟
            </div>
            @enderror

            <hr class="my-4 col-12">
            <label class="heading col-12"> هل تدفع نفقة:
            </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pay" id="inlineRadio1" value="نعم">
                <label class="form-check-label" for="inlineRadio1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pay" id="inlineRadio2" value="لا">
                <label class="form-check-label" for="inlineRadio2">لا</label>
            </div>
            @error('pay')
            <div class="alert alert-danger mt-1 mb-1">
                هل تدفع نفقة:
            </div>
            @enderror


            <hr class="my-4 col-12">
            <label class="heading col-12"> معلومات حول الأولاد تحت سن ال 18:
            </label>
            <div class="table-responsive-sm">

                <table class="table table-hover">
                    <thead>
                    {{--  start row1 --}}
                    <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">سنة الميلاد</th>
                        <th scope="col">الولد تحت رعايتي</th>
                        <th scope="col">ادفع عنه نفقة</th>
                        <th scope="col">انا اب\ ام احادي لهذا الولد</th>
                        <th scope="col">ولد ذو عجز\ قدرات خاصة</th>
                        <th scope="col">ولد يتعلم في تعليم خاص</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row"><input type="text" name="childName1" value=""></td>
                        <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"
                                   name="childDate1"
                                   val="سنه الولاده"/></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection1" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection1" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply1" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply1" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle1" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle1" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds1" id="inlineRadio1"
                                       value="نعم ">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds1" id="inlineRadio2"
                                       value=" لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds1" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds1" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><input type="text" name="childName2" value=""></td>
                        <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"
                                   name="childDate1"
                                   val="سنه الولاده"/></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection2" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection2" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply2" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply2" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle2" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle2" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds2" id="inlineRadio1"
                                       value="نعم ">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds2" id="inlineRadio2"
                                       value=" لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds2" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds2" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><input type="text" name="childName3" value=""></td>
                        <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"
                                   name="childDate1"
                                   val="سنه الولاده"/></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection3" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection3" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply3" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply3" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle3" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle3" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds3" id="inlineRadio1"
                                       value="نعم ">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds3" id="inlineRadio2"
                                       value=" لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds3" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds3" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><input type="text" name="childName4" value=""></td>
                        <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"
                                   name="childDate1"
                                   val="سنه الولاده"/></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection4" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection4" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply4" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply4" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle4" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle4" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds4" id="inlineRadio1"
                                       value="نعم ">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds4" id="inlineRadio2"
                                       value=" لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds4" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds4" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><input type="text" name="childName5" value=""></td>
                        <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"
                                   name="childDate1"
                                   val="سنه الولاده"/></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection5" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childProtection5" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply5" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSupply5" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle5" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSingle5" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds5" id="inlineRadio1"
                                       value="نعم ">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childNeeds5" id="inlineRadio2"
                                       value=" لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds5" id="inlineRadio1"
                                       value="نعم">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="childSpecialNeeds5" id="inlineRadio2"
                                       value="لا">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>

            <hr class="my-4 col-12">
            <label class="heading col-12"> تبرعت لجمعية خيرية ولدي وصل:
            </label>
            <br/>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="مبارعه" id="inlineRadio1" value="نعم">
                <label class="form-check-label" for="inlineRadio1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="مبارعه" id="inlineRadio2" value="لا">
                <label class="form-check-label" for="inlineRadio2">لا</label>
            </div>
            @error('مبارعه')
            <div class="alert alert-danger mt-1 mb-1">
                تبرعت لجمعية خيرية ولدي وصل:
            </div>
            @enderror
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12"> ادفع لتامين حياة \ تامين منزل:

        </label>
        <br/>
        <br/>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="تامين" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="تامين" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('تامين')
        <div class="alert alert-danger mt-1 mb-1">
            ادفع لتامين حياة \ تامين منزل:
        </div>
        @enderror

        <br/>
        <label class="heading col-12"> انا \ زوجي لدينا مصلحة خاصة:

        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="مصلحة" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="مصلحة" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('مصلحة')
        <div class="alert alert-danger mt-1 mb-1">
            انا \ زوجي لدينا مصلحة خاصة:
        </div>
        @enderror

        <label class="heading col-12">انا \ زوجي عاجز بنسبة 90 %على الأقل:


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="عاجز" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="عاجز" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('عاجز')
        <div class="alert alert-danger mt-1 mb-1">
            انا \ زوجي لدينا مصلحة خاصة:
        </div>
        @enderror


        <hr class="my-4 col-12">
        <label class="heading col-12"> بعت عقار\ أرض ودفعت ضريبة:


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ضريبة" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ضريبة" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('ضريبة')
        <div class="alert alert-danger mt-1 mb-1">
            انا \ زوجي عاجز بنسبة 90 %على الأقل:
        </div>
        @enderror


        <hr class="my-4 col-12">
        <label class="heading col-12"> بأي سنوات أنت \ زوجك صاحب مصلحة؟


        </label>
        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" name="stakeHolderYear2014" id="inlineCheckbox1"
                   value="2014">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="stakeHolderYear2015" id="inlineCheckbox2"
                   value="2015">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="stakeHolderYear2016" id="inlineCheckbox2"
                   value="2016">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="stakeHolderYear2017" id="inlineCheckbox2"
                   value="2017">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="stakeHolderYear2018" id="inlineCheckbox2"
                   value="2018">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="stakeHolderYear2019" id="inlineCheckbox2"
                   value="2019">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="stakeHolderYear2020" id="inlineCheckbox2"
                   value="2020">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">هل قدمت في الماضي طلب لاسترجاع ضريبة او قدمت تقرير سنوي لضريبة الدخل؟


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="تقرير" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="تقرير" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('تقرير')
        <div class="alert alert-danger mt-1 mb-1">
            هل قدمت في الماضي طلب لاسترجاع ضريبة او قدمت تقرير سنوي لضريبة الدخل؟
        </div>
        @enderror


        {{-- here --}}

        <hr class="my-4 col-12">
        <label class="heading col-12"> في أي سنوات قدمت؟

        </label>
        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" name="taxReport2014" id="inlineCheckbox1" value="2014">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxReport2015" id="inlineCheckbox2" value="2015">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxReport2016" id="inlineCheckbox2" value="2016">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxReport2017" id="inlineCheckbox2" value="2017">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxReport2018" id="inlineCheckbox2" value="2018">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxReport2019" id="inlineCheckbox2" value="2019">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxReport2020" id="inlineCheckbox2" value="2020">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">
            لأي سنوات تريد تقديم طلب السترجاع ضريبة؟

        </label>
        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" name="taxRefund2014" id="inlineCheckbox1" value="2014">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxRefund2015" id="inlineCheckbox2" value="2015">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxRefund2016" id="inlineCheckbox2" value="2016">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxRefund2017" id="inlineCheckbox2" value="2017">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxRefund2018" id="inlineCheckbox2" value="2018">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxRefund2019" id="inlineCheckbox2" value="2019">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="taxRefund2020" id="inlineCheckbox2" value="2020">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>

        {{-- here --}}

        <hr class="my-4 col-12">
        <label class="heading col-12">اكتب هنا أماكن العمل التي عملت بها:</label>
        <div class="d-flex">
            <div class="control-group form-group col-md-4">
                <h5>2014</h5>
                <input type="text" name="work2014" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2015</h5>
                <input type="text" name="work2015" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2016</h5>
                <input type="text" name="work2016" class="form-control required" placeholder="مكان العمل">
            </div>
        </div>
        <div class="d-flex">
            <div class="control-group form-group col-md-4">
                <h5>2017</h5>
                <input type="text" name="work2017" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2018</h5>
                <input type="text" name="work2018" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2019</h5>
                <input type="text" name="work2019" class="form-control required" placeholder="مكان العمل">
            </div>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">كنت عاطل عن العمل خلال السنة
        </label>

        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" name="unemployment2014" id="inlineCheckbox1" value="2014">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="unemployment2015" id="inlineCheckbox2" value="2015">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="unemployment2016" id="inlineCheckbox2" value="2016">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="unemployment2017" id="inlineCheckbox2" value="2017">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="unemployment2018" id="inlineCheckbox2" value="2018">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="unemployment2019" id="inlineCheckbox2" value="2019">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="unemployment2020" id="inlineCheckbox2" value="2020">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">
            حصلت على مخصصات بطالة؟

        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gotPay" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gotPay" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('gotPay')
        <div class="alert alert-danger mt-1 mb-1">
            حصلت على مخصصات بطالة؟
        </div>
        @enderror

        <hr class="my-4 col-12">
        <label class="heading col-12">
            كم كان معدل راتبك الشهري في الست سنوات الأخيرة:

        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="salaryRange" id="inlineRadio1" value=" حتى6500">
            <label class="form-check-label" for="inlineRadio1">
                حتى
                6500
                &#8362;
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="salaryRange" id="inlineRadio2"
                   value=" 6500-12,000  &#8362">
            <label class="form-check-label" for="inlineRadio2">
                6500-12,000 &#8362;

            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="salaryRange" id="inlineRadio2"
                   value="12,000-20,000  &#8362">
            <label class="form-check-label" for="inlineRadio2">
                12,000-20,000 &#8362;

            </label>

        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="salaryRange" id="inlineRadio2" value="20,000 +">
            <label class="form-check-label" for="inlineRadio2">
                20,000 &#8362; واكثر

            </label>

        </div>
        @error('salaryRange')
        <div class="alert alert-danger mt-1 mb-1">
            حصلت على دخل ايجار من شقة او محل املكه؟
        </div>
        @enderror

        <hr class="my-4 col-12">
        <label class="heading col-12">حصلت على دخل ايجار من شقة او محل املكه؟


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="own" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="own" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('own')
        <div class="alert alert-danger mt-1 mb-1">
            حصلت على دخل ايجار من شقة او محل املكه؟
        </div>
        @enderror

        <hr class="my-4 col-12">
        <label class="heading col-12">سحبت اتعابك ومستحقات عمل؟


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="withdraw" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="withdraw" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('withdraw')
        <div class="alert alert-danger mt-1 mb-1" id="error">
            سحبت اتعابك ومستحقات عمل؟
        </div>
        @enderror


        <hr class="my-4 col-12">
        <label class="heading col-12">في أي سنة سحبت أتعابك؟


        </label>

        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="feesDrawn2014" value="2014">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="feesDrawn2015" value="2014">
            <label class="form-check-label" for="inlineCheckbox2">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="feesDrawn2016" value="2016">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="feesDrawn2017" value="2017">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="feesDrawn2018" value="2018">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="feesDrawn2019" value="2019">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="feesDrawn2020" value="2020">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">
            من أي صندوق توفير سحبت؟

        </label>

        <div class="control-group form-group">
            <input type="text" name="saving_fund" class="form-control required" placeholder="ادخل اسم الصندوق">
        </div>
        @error('saving_fund')
        <div class="alert alert-danger mt-1 mb-1" id="error">
            هل لديك ديون او ملفات مفتوحة؟
        </div>
        @enderror

        <hr class="my-4 col-12">
        <label class="heading col-12">
            هل لديك ديون او ملفات مفتوحة؟


        </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="debt" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="debt" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="debt">لا</label>
        </div>
        @error('debt')
        <div class="alert alert-danger mt-1 mb-1" id="error">
            هل لديك ديون او ملفات مفتوحة؟
        </div>
        @enderror

        <hr class="my-4 col-12">
        <label class="heading col-12">
            هل حسابك الجاري في البنك مرهون؟


        </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="نعم">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="لا">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>
        @error('inlineRadioOptions1')
        <div class="alert alert-danger mt-1 mb-1" id="error">
            هل حسابك الجاري في البنك مرهون؟
        </div>
        @enderror


        <hr class="my-4 col-12">
        <label class="heading col-12">
            وفقا لاجاباتك فان فرصتك لاسترداد الضرائب في الست سنوات الأخيرة هي


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="جيدة جدا">
            <label class="form-check-label" for="inlineRadio1">جيدة جدا
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="متوسطة">
            <label class="form-check-label" for="inlineRadio2">متوسطة
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="جيدة">
            <label class="form-check-label" for="inlineRadio1">جيدة
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="ضئيلة">
            <label class="form-check-label" for="inlineRadio2">ضئيلة
            </label>
        </div>
        @error('inlineRadioOptions2')
        <div class="alert alert-danger mt-1 mb-1" id="error">
            هل حسابك الجاري في البنك مرهون؟
        </div>
        @enderror
        <hr class="my-4 col-12">

        <div class="form-group">
            <input type="submit" id="submit" name="send" class="btn btn-primary col-12" value="ارسال الطلب"/>
        </div>


    </form>

</div>
{{-- contact form --}}


<footer class="my-5 pt-5 text-muted text-center text-small" id="contactError">
    <div class="col-md-12">
        <h3 class="mr-2" for="e6" id="formhead"> اذا كنت بحاجة للتواصل معنا، أدخل البيانات التالية وسنتواصل معك
            قريبا </h3>
        {{--        <form class="" id="second_form" method="get" action="{{url('sendemail/contact')}}">--}}
        {{--            {{ csrf_field() }}--}}
        <form method="get" action="{{url('/contact#contactError')}}">
            {{ csrf_field() }}
            <div class="row">
                <input type="hidden" name="which" value="second_form">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="contactName" id="name" class="form-control" placeholder="الاسم">
                        <p class="help-block text-danger"></p>
                    </div>
                    @error('contactName')
                    <div class="alert alert-danger mt-1 mb-1" id="error">
                        هل حسابك الجاري في البنك مرهون؟
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="idnumber" id="email" class="form-control" placeholder="رقم الهوية">
                        <p class="help-block text-danger"></p>
                        <div id="pwm-inline-icon-63737" class="pwm-field-icon"
                             style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -44px; margin-left: -4px;">
                            <svg
                                style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;"
                                viewBox="0 0 40 64">
                                <g>
                                    <path
                                        d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path>
                                    <path
                                        d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path>
                                </g>
                            </svg>
                        </div>
                        @error('idnumber')
                        <div class="alert alert-danger mt-1 mb-1" id="error">
                            هل حسابك الجاري في البنك مرهون؟
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="travel" id="travel" class="form-control"
                               placeholder="رقم رخصة السياقة او رقم جواز السفر">
                        <p class="help-block text-danger"></p>
                    </div>
                    @error('travel')
                    <div class="alert alert-danger mt-1 mb-1" id="error">
                        هل حسابك الجاري في البنك مرهون؟
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <input type="hidden" name="which" value="second_form">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="wifename" id="wifename" class="form-control"
                               placeholder="اسم الزوج\ الزوجة">
                        <p class="help-block text-danger"></p>
                    </div>
                    @error('wifename')
                    <div class="alert alert-danger mt-1 mb-1" id="error">
                        هل حسابك الجاري في البنك مرهون؟
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="idwife" id="idwife" class="form-control"
                               placeholder="رقم هوية الزوج\ة">
                        <p class="help-block text-danger"></p>
                    </div>
                    @error('idwife')
                    <div class="alert alert-danger mt-1 mb-1" id="error">
                        رقم هويه 
                    </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="wifetravel" id="wifetravel" class="form-control"
                               placeholder=" رقم رخصة السياقة او رقم جواز السفر الخاص به/ها">
                        <p class="help-block text-danger"></p>
                    </div>
                    @error('wifetravel')
                    <div class="alert alert-danger mt-1 mb-1" id="error">
                        صة السياقة او رقم جواز السفر الخاص به/ها
                    </div>
                    @enderror
                </div>
            </div>

            <br>

            {{-- <div class="d-flex"> --}}

            {{-- <h3 class="mr-1" for="e6" > أوافق بان يتم فحص احقيتي في استرجاع الضريبة ويشمل كافة الاجراءات اللازمة لذلك </h3><br> --}}
            <h3 for="e6" id="formhead">
                <input type="checkbox" id="agree" name="agree" value="موافق" style="float:none">
                أوافق بان يتم فحص احقيتي في استرجاع الضريبة ويشمل كافة الاجراءات اللازمة لذلك


            </h3>
            @error('agree')
            <div class="alert alert-danger mt-1 mb-1" id="error">
                أوافق بان يتم فحص احقيتي في استرجاع الضريبة ويشمل كافة الاجراءات اللازمة لذلك
            </div>
            @enderror
            <div id="success"></div>
            <div class="row">
                <div>
                    <button type="submit" class="btn btn-warning col-12" style="height:50px;" id="submit"> ارسال
                        الرسالة
                    </button>
                </div>
            </div>
        </form>
    </div>
    <p class="mb-1">&copy; All rights reserved Tarek Khalaily</p>
    <div id="clockbox"></div>

    <script type="text/javascript">
        var tday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var tmonth = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        function GetClock() {
            var d = new Date();
            var nday = d.getDay(), nmonth = d.getMonth(), ndate = d.getDate(), nyear = d.getFullYear();
            var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds(), ap;

            if (nhour == 0) {
                ap = " AM";
                nhour = 12;
            } else if (nhour < 12) {
                ap = " AM";
            } else if (nhour == 12) {
                ap = " PM";
            } else if (nhour > 12) {
                ap = " PM";
                nhour -= 12;
            }

            if (nmin <= 9) nmin = "0" + nmin;
            if (nsec <= 9) nsec = "0" + nsec;

            var clocktext = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
            document.getElementById('clockbox').innerHTML = clocktext;
        }

        GetClock();
        setInterval(GetClock, 1000);
    </script>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>
