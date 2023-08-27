@extends('Backend.layouts.master')

@section('title','Edit Tag')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-4 mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Update Tag</h4>
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
                {!! Form::model($tag,['method'=>'put','route'=>['tag.update',$tag->id]]) !!}
                    @include('Backend.modules.tag.form')
                    {!! Form::button('Update tag',['type'=>'submit','class'=>'btn btn-primary mt-2']) !!}
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

tag
