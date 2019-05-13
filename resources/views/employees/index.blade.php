@extends('layouts.app')

@section('content')
    <h1 class="ui left floated">List of Employees</h1>
    <a class="ui positive basic button">Add Employee</a>
    <table class="ui celled table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Job</th>
            </tr>
        </thead>
        <tbody>
            @if(count($employees) > 0)
                @foreach($employees as $row)
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->job}}</td>
                @endforeach
            @else 
                <tr align="center">
                    <td colspan="3">
                        <p>There are no employees.</p>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection