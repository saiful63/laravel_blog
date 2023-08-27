@extends('Backend.layouts.master')

@section('title','Tag')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-4 mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Create Tag</h4>
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
             {!! Form::open(['method'=>'post','route'=>'tag.store']) !!}
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['id'=>'name','class'=>$errors->has('name')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter Tag name']) !!}


                    {!! Form::label('tag','Tag') !!}
                    {!! Form::text('tag',null,['id'=>'tag','class'=>$errors->has('tag')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter tag name']) !!}

                    {!! Form::label('order_by','Tag serial',['class'=>'mt-2']) !!}
                    {!! Form::number('order_by',null,['class'=>'form-control','placeholder'=>'Enter Tag serial']) !!}


                    {!! Form::label('status','Tag status',['class'=>'mt-2']) !!}
                    {!! Form::select('status',[1=>'Active',0=>'Inactive'],null,['class'=>'form-select','placeholder'=>'Enter Tag status']) !!}


                    {!! Form::button('Create Tag',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
            </div>
        </div>


       </div>
    </div>
  </div>

  @push('jquery')
    <script>
        $(document).ready(function(){
            $("#name").on('input',function(){
                let name = $(this).val();
                let tag = name.replaceAll(' ','-');
                $("#tag").val(tag.toLowerCase());
            })
        })
    </script>
  @endpush

@endsection


