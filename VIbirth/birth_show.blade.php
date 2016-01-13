@extends('layout.master')

@section('content')

<div class="container">

    <h2>Birth Certificate</h2>

    <div class="col-sm-6">
    <table class="table ">
        <thead>

        </thead>
        <tbody>
        <tr>
            <th>ID:</th>
            <td>{{ $birth_show->id }}</td>
        </tr>
        <tr>
            <th>Date of Birth:</th>
            <td>{{ $birth_show->date_of_birth }}</td>
        </tr>
        <tr>
            <th>Name of Child:</th>
            <td>{{ $birth_show->name_of_child }}</td>
        </tr>
        <tr>
            <th>Sex of Child:</th>
            <td>{{ $birth_show->sex_of_child }}</td>
        </tr>
        <tr>
            <th>Sex of Child:</th>
            <td>{{ $birth_show->weight_of_child.' kg' }}</td>
        </tr>
        <tr>
            <th>Name of Father:</th>
            <td>{{ $birth_show->name_of_father }}</td>
        </tr>
        <tr>
            <th>Father's Nationality:</th>
            <td>{{ $birth_show->fathers_nationality }}</td>
        </tr>
        <tr>
            <th>Name of Mother:</th>
            <td>{{ $birth_show->name_of_mother }}</td>
        </tr>
        <tr>
            <th>Mother's Nationality:</th>
            <td>{{ $birth_show->mothers_nationality }}</td>
        </tr>
        <tr>
            <th>Present Address:</th>
            <td>{{ $birth_show->present_address }}</td>
        </tr>
        <tr>
            <th>Permanent Address:</th>
            <td>{{ $birth_show->permanent_address }}</td>
        </tr>
        <tr>
            <th>Date of Registration:</th>
            <td>{{ $birth_show->date_of_registration }}</td>
        </tr>
        <tr>
            <th>Name of Reporter:</th>
            <td>{{ $birth_show->name_of_reporter }}</td>
        </tr>

        <tr>
            <th>
                <p>......................</p>
                <p>Date</p>
            </th>
            <th>
                <p>................................</p>
                <p>Signature of Authority</p>
            </th>
        </tr>
        </tbody>
    </table>
    </div>


</div>

@endsection

