@extends('Backend.auth.layouts.master')

@section('title','Register')

@section('content')
  <div class="mcard">
        <div class="card sm-card">

            <div class="card-body">
                <h5 class="card-title">Registration</h5>
                <hr>
                {!! Form::open(['method'=>'post','route'=>'register']) !!}
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['class'=>$errors->has('name')?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

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

                    {!! Form::label('password_confirmation','Password') !!}
                    {!! Form::password('password_confirmation',['class'=>'form-control form-control-sm mt-2']) !!}


                    {!! Form::button('Register',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}


                <p> Already have a account? : <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
@endsection
