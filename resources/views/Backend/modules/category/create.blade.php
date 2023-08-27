@extends('Backend.layouts.master')

@section('title','Category')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-4 mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Create Category</h4>
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
             {!! Form::open(['method'=>'post','route'=>'category.store']) !!}
                    {!! Form::label('name','Name') !!}
                    {!! Form::text('name',null,['id'=>'name','class'=>$errors->has('name')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter category name']) !!}


                    {!! Form::label('slug','Slug') !!}
                    {!! Form::text('slug',null,['id'=>'slug','class'=>$errors->has('slug')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter slug name']) !!}

                    {!! Form::label('order_by','Category serial',['class'=>'mt-2']) !!}
                    {!! Form::number('order_by',null,['class'=>'form-control','placeholder'=>'Enter Category serial']) !!}


                    {!! Form::label('status','Category status',['class'=>'mt-2']) !!}
                    {!! Form::select('status',[1=>'Active',0=>'Inactive'],null,['class'=>'form-select','placeholder'=>'Enter Category status']) !!}


                    {!! Form::button('Create category',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
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
                let slug = name.replaceAll(' ','-');
                $("#slug").val(slug.toLowerCase());
            })
        })
    </script>
  @endpush

@endsection


