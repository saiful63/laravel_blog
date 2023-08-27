@extends('Backend.layouts.master')

@section('title','Edit Category')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-4 mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Update Category</h4>
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
                {!! Form::model($category,['method'=>'put','route'=>['category.update',$category->id]]) !!}
                    @include('Backend.modules.category.form')
                    {!! Form::button('Update category',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
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


