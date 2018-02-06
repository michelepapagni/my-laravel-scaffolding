@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $person['first_name'] }} {{ $person['last_name'] }} ({{ $person['age'] }} years)</div>
                </div>
            </div>
        </div>
    </div>
@endsection