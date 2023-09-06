@extends('Frontend.layouts.master')

@section('title','Contact us')

@section('main-content')
  <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                      <h4 class="m-2">Contact us</h4>
                      {!! Form::open(['method'=>'post','route'=>'addContactMsg','class'=>'form-control']) !!}

                        {!! Form::text('name',null,['class'=>'form-control form-control-sm m-2','placeholder'=>'Enter your name']) !!}



                        {!! Form::text('email',null,['class'=>'form-control form-control-sm m-2','placeholder'=>'Enter Email']) !!}

                        {!! Form::text('number',null,['class'=>'form-control form-control-sm m-2','placeholder'=>'Enter Number']) !!}
                        {!! Form::text('subject',null,['class'=>'form-control form-control-sm m-2','placeholder'=>'Enter Subject']) !!}
                        {!! Form::textarea('message',null,['class'=>'form-control form-control-sm m-2','placeholder'=>'Enter Message','rows'=>10]) !!}
                        {!! Form::button('Submit',['class'=>'m-2 btn btn-primary','type'=>'submit']) !!}
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
          </div>
          @include('Frontend.includes.sidebar')
        </div>
      </div>
        
    </section>
@endsection
