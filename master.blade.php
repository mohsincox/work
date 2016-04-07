<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Management System</title>

    {{--CSS--}}
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/jquery.dataTables.min.css') !!}
    {!! Html::style('css/datepicker.css') !!}
    {!! Html::style('css/dataTables.bootstrap.css') !!}
    {!! Html::style('css/chosen.css') !!}
    {!! Html::style('css/chosen-bootstrap.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('plugin/select2-3.5.4/select2-bootstrap.css') !!}
    {!! Html::style('plugin/select2-3.5.4/select2.css') !!}
    {!! Html::style('css/style.css') !!}

    {{--mohsin--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    {{--/mohsin--}}

    @yield('style')

</head>
<body>

    <!-- Header Menu -->
    @include('layout.navbar.main')
    <!-- End of Header Menu -->

    <div class="container">
        {{--@include('flash::message')--}}

        @yield('content')

    </div>

    <hr/>
    <div class="container">
        @include('layout.partial.footer')
    </div>

    {{--Scripts--}}
    {!! Html::script('js/jquery-1.11.1.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
{{--    {!! Html::script('js/bootstrap-datepicker.js') !!}--}}
    {!! Html::script('js/jquery.dataTables.min.js') !!}
    {!! Html::script('js/chosen.jquery.min.js')!!}
    {!! Html::script('plugin/select2-3.5.4/select2.min.js') !!}


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    {{--mohsin--}}
    <link rel="stylesheet" type="text/css" href="mohsin/jquery.datetimepicker1.css"/>
    <script src="mohsin/jquery.datetimepicker.full1.js"></script>
    {{--/mohsin--}}

    @yield('script')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <![endif]-->

    <script>


        $('#datetimepicker_birth').datetimepicker({
            dateFormat: 'yy-m-d',
            formatTime:'H:i'
        });
        $('#datetimepicker_reg').datetimepicker({
            dateFormat: 'yy-m-d',
            formatTime:'H:i'
        });
        $('#datetimepicker_issue').datetimepicker({
            dateFormat: 'yy-m-d',
            formatTime:'H:i'
        });
/*  ajax
var basePath = $('base').attr('href');

$(document).ready(function () {
   $("#serial_patient_id").on('click',function(){
            var str = $("#patient_id").val();
            values = 'patient_id=' + str;
            $url=basePath + "/doctor-serial-patient-name";
            $.ajax({
            type: "GET",
            url:$url,
            data: values,
            }).success(function (data) {
               $('#name-of-patient').text(data);
                })
                .error(function (data) {

                });
                
           
        });

});
*/
/*
 public function store(DoctorSerialRequest $request)
    {
      // dd($request->all());

        $doctorId = $request->doctor_id;

      $doctor = Doctor::find($doctorId);

     
      $request->merge( ['amount' => $doctor->amount] );

      // $request->amount = $doctor->amount;

// dd($request->all());

      $docSerial = DoctorSerial::create($request->all());

      // dd($request);

        flash()->success('Successfully Created');

        return redirect('doctor-serial/show-serial/'. $docSerial->id);
    }
*/
    </script>

</body>
{{--mohsin--}}

{{--/mohsin--}}
</html>
