@extends('Backend.layouts.master')

@section('title','Edit Post')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Edit Post</h4>
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
                {!! Form::model($post,['method'=>'put','route'=>['post.update',$post->id],'files'=>true]) !!}
                    @include('Backend.modules.post.form')
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


