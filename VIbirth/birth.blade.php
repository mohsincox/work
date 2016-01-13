@extends('layout.master')

@section('content')
<div class="container">
    <h2>Birth Certificate</h2>

    <div>
        <a href="birth/create"><button type="button" class="btn btn-primary">Create Certificate</button></a>

    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Date of Birth</th>
            <th>View Certificate</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($birthInfo as $birth)
        <tr>
            <td>
                <?php echo $birth->id;?>
            </td>
            <td>
                {{$birth->date_of_birth}}
            </td>
            <td>
                <a href="birth/{{ $birth->id }}"><button type="button" class="btn btn-default btn-sm">View</button></a>
            </td>
            <th>
                <a href="birth/{{ $birth->id }}/edit"><button type="button" class="btn btn-default btn-sm">Edit</button></a>
                <a href="birth/delete/{{ $birth->id }}"><button type="button" class="btn btn-default btn-sm">Delele</button></a>
            </th>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection

