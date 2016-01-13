@extends('layout.master')

@section('content')

<div class="container">
    <h2>Edit Birth Registration Form</h2>


    {{--<form  action="/birth/modify/{{  $birth->id }} " method="post" class="form-horizontal" role="form">--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

{!! Form::open(['url'=>"/birth/$birth->id", 'method'=>'PUT', 'class'=>'form-horizontal','role'=>'form']) !!}
        <div class="form-group">
            <label class="control-label col-sm-2" for="date_of_birth">Date of Birth:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="datetimepicker_birth" placeholder="Date of Birth" name="date_of_birth" value="{{ $birth->date_of_birth }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="name_of_child">Name of Child:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="name_of_child" placeholder="Name of Child" name="name_of_child" value="{{ $birth->name_of_child }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="sex_of_child">Sex of Child:</label>
            <div class="col-sm-5">
                {{--<input type="text" class="form-control" id="sex_of_child" placeholder="Sex of Child" name="sex_of_child" value="{{ $birth->sex_of_child }}">--}}

                {{--{!! Form::radio('sex_of_child','Male',null, []) !!}--}}
                {{--{!! Form::radio('sex_of_child','Female',null, []) !!}--}}
                <?php
                $male_checked = $birth -> sex_of_child == 'Male' ? 'checked' : '';
                $female_checked = $birth -> sex_of_child == 'Female' ? 'checked' : '';

                echo "
    <div class='radio'>
      <label class='col-sm-5'><input type='radio' value='Male' name='sex_of_child' $male_checked>Male</label>
      <label class='col-sm-5'><input type='radio' value='Female' name='sex_of_child' $female_checked>Female</label>
    </div>


";
                ?>


            </div>
        </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="weight_of_child">Weight of Child:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="weight_of_child" placeholder="Weight of Child" name="weight_of_child" value="{{ $birth->weight_of_child }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="name_of_father">Name of Father:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="name_of_father" placeholder="Name of Father" name="name_of_father" value="{{ $birth->name_of_father }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fathers_nationality">Father's Nationality:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="fathers_nationality" placeholder="Father's Nationality" name="fathers_nationality" value="{{ $birth->fathers_nationality }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="name_of_mother">Name of Mother:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="name_of_mother" placeholder="Name of Mother" name="name_of_mother" value="{{ $birth->name_of_mother }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="mothers_nationality">Mother's Nationality:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="mothers_nationality" placeholder="Mother's Nationality" name="mothers_nationality" value="{{ $birth->mothers_nationality }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="present_address">Present Address:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="present_address" placeholder="present Address" name="present_address" value="{{ $birth->present_address }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="permanent_address">Permanent Address:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="permanent_address" placeholder="Permanent Address" name="permanent_address" value="{{ $birth->permanent_address }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="date_of_registration">Date of Registration:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="datetimepicker_reg" placeholder="Date of Registration" name="date_of_registration" value="{{ $birth->date_of_registration }}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="name_of_reporter">Name of Reporter:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="name_of_reporter" placeholder="Name of Reporter" name="name_of_reporter" value="{{ $birth->name_of_reporter }}">
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
{!! Form::close() !!}
    {{--</form>--}}


</div>

@endsection
