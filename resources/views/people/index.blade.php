@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>People</h1>
                <a href="{{ route('people.create') }}" class="btn btn-primary pull-right">Add new</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Is Active</th>
                        <th>Edit</th>
                    </tr>
                    @foreach ($people as $person)
                        <tr>
                            <td>{{ $person['id'] }}</td>
                            <td>{{ $person['first_name'] }}</td>
                            <td>{{ $person['last_name'] }}</td>
                            <td>{{ $person['age'] }}</td>
                            <td>{{ ($person['is_active']) ? 'Y' : 'N' }}</td>
                            <td>
                                <a href="{{ route('people.edit', $person['id']) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection