@extends('Backend.auth.layouts.master')

@section('title','Reset password')

@section('content')
  <div class="wrapper">
        <div class="card wrapper-card">

            <div class="card-body">
                <h5 class="card-title">Registration</h5>
                <hr>
                {!! Form::open(['method'=>'post','route'=>'password.store']) !!}
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    {{ Form::hidden('token',$request->route('token')) }}
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',$request->email,['class'=>$errors->has('email')?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class'=>$errors->has('password')?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    {!! Form::label('password_confirmation','Password Confirmation') !!}
                    {!! Form::password('password_confirmation',['class'=>'form-control form-control-sm mt-2']) !!}


                    {!! Form::button('Reset password',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}


                <p> Already have a account? : <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
@endsection
