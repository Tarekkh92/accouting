<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Checkout example for Bootstrap</title>
    <style>
        .heading {
            font-size: larger;
            color: blue;
        }

        .responsive {
            max-width: 100%;
            height: auto;
        }

        .lead {
            color: lightblue;
        }

        .custom-btn {
            max-width: 100%;
            padding-left: 25px;
            padding-right: 25px;
        }

        /*
        #x,#y{
          float: right;
          /* border: 1px solid lightgray; */
        /* margin-right: 5px;
        #y{

        border-right: 6px solid transparent;

        */


    </style>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <img src="ttt.jpg" class="responsive">
        <h2>أهلا وسهلا بكم في الموقع الخاص بالضرائب وتحصيل المستحقات يرجى ادخال البيانات التالية:
        </h2>
        <p class="lead">
            اضغط على ما يلائمك من التالي فيما يخص وضعك الاجتماعي والتعليمي اليوم:

        </p>
    </div>

    <form method="get" action="{{url('sendemail/send')}}">
        {{ csrf_field() }}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div id="x">
            <label class="heading col-12 "> اختار وضعك الاجتماعي </label>
            <br/>
            <div class="form-check form-check-inline col">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">متزوج</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">مطلق</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">ازمل</label>
            </div>
            {{--  --}}
            <hr class="my-4 col-12">
            <label class="heading col-12"> هل لديك اولاد </label>
            <br/>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">لا</label>
            </div>
            {{--  --}}
            <hr class="my-2 col-12">
            <label class="heading col-12"> هل حصلت على لقب أو شهادة جامعية </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">لا</label>
            </div>
            <hr class="my-4 col-12">
            <label class="heading col-12"> هل لديكه فدص سكن ؟ </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">لا</label>
            </div>
            <hr class="my-4 col-12">

        </div>
        <div id="y">
            {{-- <label class="heading col-12">  2 .نرجو منك تعبئة المعلومات التالية: --}}
            {{-- </label> --}}
            {{-- <br/> --}}
            <label class="heading col-12"> انا </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">رجل </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">امراه</label>
            </div>

            <hr class="my-4 col-12">
            <div class="st_row">
                <label class="heading col-12"> تاريخ الميلاد

                </label>


                <div class="col-md-4">
                    <input type="date" placeholder="Select Date"/>
                </div>
            </div>
            <hr class="my-4 col-12">
            <label class="heading col-12"> في أي سنة تزوجت؟</label>
            <input type="month"/>
            <hr class="my-4 col-12">
            <label class="heading col-12">في أي سنة تطلقت؟
            </label>
            <input type="month"/>

            <hr class="my-4 col-12">
            <label class="heading col-12"> هل تدفع نفقة:
            </label>
            <br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">نعم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input col-1" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label col-1" for="inlineCheckbox1">لا</label>
            </div>

            <hr class="my-4 col-12">
            <label class="heading col-12"> معلومات حول الأولاد تحت سن ال 18:
            </label>
            <div class="table-responsive-sm">

                <table class="table table-hover">
                    <thead>
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
                        <td scope="row"><input type="text" value="الاسم"></td>
                        <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"/></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row"><input type="text" value="الاسم"></td>
                        <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"/></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">نعم</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">لا</label>
                            </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                           value="option1">
                    <label class="form-check-label" for="inlineRadio1">نعم</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                           value="option2">
                    <label class="form-check-label" for="inlineRadio2">لا</label>
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                           value="option1">
                    <label class="form-check-label" for="inlineRadio1">نعم</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                           value="option2">
                    <label class="form-check-label" for="inlineRadio2">لا</label>
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                           value="option1">
                    <label class="form-check-label" for="inlineRadio1">نعم</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                           value="option2">
                    <label class="form-check-label" for="inlineRadio2">لا</label>
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                           value="option1">
                    <label class="form-check-label" for="inlineRadio1">نعم</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                           value="option2">
                    <label class="form-check-label" for="inlineRadio2">لا</label>
                </div>
            </td>
            </tr>
            <tr>
                <td scope="row"><input type="text" value="الاسم"></td>
                <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"/></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td scope="row"><input type="text" value="الاسم"></td>
                <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"/></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td scope="row"><input type="text" value="الاسم"></td>
                <td><input type="month" placeholder="MM/DD/YYYY" onfocus="(this.type='date')"/></td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">لا</label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
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
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12"> ادفع لتامين حياة \ تامين منزل:

        </label>
        <br/>
        <br/>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12"> في الست سنوات الأخيرة، اختار المكان الملائم لوضعك:


        </label>
        <br/>
        <br/>
        <label class="heading col-12"> انا \ زوجي لدينا مصلحة خاصة:

        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>

        <label class="heading col-12"> انا \ زوجي لدينا مصلحة خاصة:

        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12"> بعت عقار\ أرض ودفعت ضريبة:


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12"> بأي سنوات أنت \ زوجك صاحب مصلحة؟


        </label>
        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">هل قدمت في الماضي طلب لاسترجاع ضريبة او قدمت تقرير سنوي لضريبة الدخل؟


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12"> في أي سنوات قدمت؟

        </label>
        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">
            لأي سنوات تريد تقديم طلب السترجاع ضريبة؟

        </label>
        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">اكتب هنا أماكن العمل التي عملت بها:</label>
        <div class="d-flex">
            <div class="control-group form-group col-md-4">
                <h5>2014</h5>
                <input type="text" name="work1" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2015</h5>
                <input type="text" name="work2" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2016</h5>
                <input type="text" name="work3" class="form-control required" placeholder="مكان العمل">
            </div>
        </div>
        <div class="d-flex">
            <div class="control-group form-group col-md-4">
                <h5>2017</h5>
                <input type="text" name="work1" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2018</h5>
                <input type="text" name="work2" class="form-control required" placeholder="مكان العمل">
            </div>
            <br>
            <div class="control-group form-group mr-1 col-md-4">
                <h5>2019</h5>
                <input type="text" name="work3" class="form-control required" placeholder="مكان العمل">
            </div>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">كنت عاطل عن العمل خلال السنة
        </label>

        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">
            حصلت على مخصصات بطالة؟

        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">كنت عاطل عن العمل خلال السنة
        </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">
                حتى
                6500
                &#8362;
            </label>
        </div>
        <br/>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">6500-12,000 &#8362;</label>
        </div>
        <br/>

        <div class="form-check  form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">12,000-20,000 &#8362;</label>
        </div>
        <br/>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">20,000 &#8362; واكثر</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">حصلت على دخل ايجار من شقة او محل املكه؟


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">سحبت اتعابك ومستحقات عمل؟


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">في أي سنة سحبت أتعابك؟


        </label>

        <div class="form-check form-check-inline col">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">2014</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2015</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2016</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2017</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2018</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2019</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">2020</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">
            من أي صندوق توفير سحبت؟

        </label>

        <div class="control-group form-group">
            <input type="text" name="dd" class="form-control required" placeholder="ادخل اسم الصندوق">
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">
            هل لديك ديون او ملفات مفتوحة؟


        </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>

        <hr class="my-4 col-12">
        <label class="heading col-12">
            هل حسابك الجاري في البنك مرهون؟


        </label>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">نعم</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">لا</label>
        </div>


        <hr class="my-4 col-12">
        <label class="heading col-12">
            وفقا لاجاباتك فان فرصتك لاسترداد الضرائب في الست سنوات الأخيرة هي


        </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">جيدة جدا
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">متوسطة
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">جيدة
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">ضئيلة
            </label>
        </div>
        <hr class="my-4 col-12">

        <div class="form-group">
            <input type="submit" name="send" class="btn btn-info col-12" value="Send"/>
        </div>

        </div>
    </form>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">s</a></li>
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
