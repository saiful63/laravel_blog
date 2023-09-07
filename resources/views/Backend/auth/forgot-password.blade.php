@extends('Backend.auth.layouts.master')

@section('title','Reset password')

@section('content')
  <div class="mcard">
        <div class="card sm-card">

            <div class="card-body">
                <h5 class="card-title">Reset Password</h5>
                <hr>
                {!! Form::open(['method'=>'post','route'=>'password.email']) !!}
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',null,['class'=>$errors->has('email')?'is-invalid form-control form-control-sm':'form-control form-control-sm']) !!}
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    {!! Form::button('Reset password',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}

                <p> Already have a account? : <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
@endsection

