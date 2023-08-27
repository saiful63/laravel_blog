@extends('Backend.auth.layouts.master')

@section('title','Login')

@section('content')
  <div class="wrapper">
        <div class="card wrapper-card">

            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <hr>
                {!! Form::open(['method'=>'post','route'=>'login']) !!}
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',null,['class'=>$errors->has('email')?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class'=>$errors->has('password')?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    {!! Form::button('Login',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
                <p class="mt-2"> <a href="{{ route('password.request') }}">Forgot password?</a></p>
                <p> Don't have a account? : <a href="{{ route('register') }}">Register</a></p>
            </div>
        </div>
    </div>
@endsection
