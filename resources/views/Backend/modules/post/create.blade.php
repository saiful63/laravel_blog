@extends('Backend.layouts.master')

@section('title','Post')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Create Post</h4>
            </div>

            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
             {!! Form::open(['method'=>'post','route'=>'post.store','files'=>true]) !!}
                    @include('Backend.modules.post.form')


                    {!! Form::button('Create post',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
            </div>
        </div>


       </div>
    </div>
  </div>



@endsection


