@extends('layouts.master')
@inject('model','App\Models\User')
@section('title')
    edit User
@endsection

@section('content')
    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title"> Edit User </h3>
        </div>

    </div>

    <div class="box-body">

        {!! Form::model($model,[
             'url' => route('users.update',$user->id),
             'method' => 'put'
        ]) !!}

        <div class="form-group">
            <label for="name"> Name </label>
            {!! Form::text('name',$user->name,[
                'class' => 'form-control'
             ]) !!}
        </div>

        <div class="form-group">
            <label for="email"> Email </label>
            {!! Form::email('email',$user->email,[
                'class' => 'form-control'
             ]) !!}
        </div>

        <div class="form-group">
            <label for="password"> Password </label>
            {!! Form::password('password',[
                'class' => 'form-control'
             ]) !!}
        </div>

        <div class="form-group">
            <label for="password_confirmation"> password_confirmation </label>
            {!! Form::password('password_confirmation',[
                'class' => 'form-control'
             ]) !!}
        </div>

        <div class="form-group">
            <label for="roles_list"> roles_list </label>
            {!! Form::select('roles_list[]',$roles,null,[
                'class' => 'form-control',
                'multiple' => 'multiple'
             ]) !!}
        </div>


        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                submit
            </button>
        </div>
        {!! Form::close() !!}

    </div>
@endsection
