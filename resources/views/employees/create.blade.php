@extends('layouts.app')

@section('content')
    <h1>Add an Employee</h1>
    <hr>
    {{ Form::open(['action' => 'EmployeesController@store', 'method' => 'POST', 'class' => 'ui form']) }}
        <div class="field">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', ['placeholder' => 'Full Name of the Employee', 'required']) }}
        </div>
        <div class="field">
            {{ Form::label('job', 'Job') }}
            {{ Form::select('job_id', $jobs, null) }}
        </div>
        {{Form::submit('Submit', ['class' => 'ui positive right floated button'])}}
    {{ Form::close() }} 
@endsection