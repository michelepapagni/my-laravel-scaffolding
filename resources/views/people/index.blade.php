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
                        <th>Vedi</th>
                        <th>Edit</th>
                        <th>Destroy</th>
                    </tr>
                    @foreach ($people as $person)
                        <tr>
                            <td>{{ $person['id'] }}</td>
                            <td>{{ $person['first_name'] }}</td>
                            <td>{{ $person['last_name'] }}</td>
                            <td>{{ $person['age'] }}</td>
                            <td>{{ ($person['is_active']) ? 'Y' : 'N' }}</td>
                            <td>
                                <a href="{{ route('people.show', $person['id']) }}" class="btn btn-primary">V</a>
                            </td>
                            <td>
                                <a href="{{ route('people.edit', $person['id']) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('people.destroy', $person['id']) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="D" class="btn-danger btn">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection