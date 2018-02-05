@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form action="{{ $form_data['action']  }}" method="POST">

                    {{ csrf_field() }}
                    {{ method_field($form_data['method']) }}

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" value="{{ (!empty($person) && !empty($person['first_name'])) ? $person['first_name'] : null }}" name="first_name" id="first_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" value="{{ (!empty($person) && !empty($person['last_name'])) ? $person['last_name'] : null }}" name="last_name" id="last_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" value="{{ (!empty($person) && !empty($person['age'])) ? $person['age'] : null }}" name="age" id="age" class="form-control">
                    </div>

                    <div class="form-group">
                        <input id="is_active" name="is_active" type="checkbox" value="1"{{ (!empty($person->is_active) && $person->is_active) ? ' checked' : null }}>
                        <label for="is_active" class="control-label">Active</label>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control" value="Save">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection