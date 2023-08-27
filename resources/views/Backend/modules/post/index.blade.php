@extends('Backend.layouts.master')

@section('title','Post')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-11 mt-5">
        <div class="card mt-5">
            <div class="card-header">
            <h4>Create Post</h4>

            </div>

            <div class="card-body">

                <table class="table table-bordered table-striped table-hover post-table">
                <div class="float-end"><a href="{{ route('post.create') }}" class="btn btn-success btn-sm mb-2">Create Post</a></div>
                   <thead>
                    <tr>
                        <th>
                            <p>SN</p>
                            <hr>
                            <p>User Id</p>

                        </th>
                        <th>
                            <p>Title</p>
                            <hr>
                            <p>Slug</p>
                        </th>

                        <th>
                            <p>Status</p>
                            <hr>
                            <p>Is_approved</p>
                        </th>
                        <th>
                            <p>Category</p>
                            <hr>
                            <p>Sub category</p>
                        </th>

                        <th class="text-center align-middle">
                            Photo
                        </th>
                        <th class="text-center align-middle">
                            <p>Tags</p>
                        </th>
                        <th>
                            <p>Created_at</p>
                            <hr>
                            <p>Updated_at</p>
                        </th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sn=1 @endphp
                    @foreach ($posts as $post)

                    <tr>
                        <td>
                            <p>{{ $sn++ }}</p>
                            <hr>
                            <p>User : {{ $post->users->name }}, id -> {{ $post->users->id }}</p>


                        </td>
                        <td>
                            <p>{{ $post->title }}</p>
                            <hr>
                            <p>{{ $post->slug }}</p>
                        </td>
                        <td>
                            <p>{{ $post->status == 1?'Published':'Unpublshed' }}</p>
                            <hr>
                            <p>{{ $post->is_approved == 1?'Approved':'Not approved' }}</p>
                        </td>
                        <td>
                            <p>{{ $post->category1->name }}</p>
                            <hr>
                            <p>{{ $post->sub_category1->name }}</p>
                        </td>

                        <td>
                            <div class="d-flex justify-content-center post-image" data-bs-toggle="modal" data-bs-target="#postedImage">

                                <img src="{{ url('image/post/original/'.$post->photo) }}"  class="img-thumbnail postedImageId1"   width="100px" height="100px" alt="">
                            </div>

                        </td>
                        <td class="text-center align-middle">
                            @php
                            $tag_colours = ['btn-primary','btn-danger','btn-info','btn-warning'];
                            @endphp
                            @foreach ($post->tags as $item)
                               <p class="btn btn-sm {{ $tag_colours[random_int(0,3)] }}">{{ $item->tag }}</p>
                            @endforeach
                        </td>
                        <td>
                            <p>{{ $post->created_at->toDayDateTimeString() }}</p>
                            <hr>
                            <p>{{ $post->updated_at != $post->created_at?$post->updated_at->toDayDateTimeString():'Not Updated' }}</p>
                        </td>

                        <td>
                            @php
                            
                                 $jsonParameter = json_encode($post->tags);
                                    $tag = urlencode($jsonParameter);

                            @endphp
                            <div class="d-flex justify-content-center">
                                <div class="m-1"><a href="{{ route('post.show',$post->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-solid fa-eye"></i></button></a></div>
                                <div class="m-1"><a href="{{ route('tagDataForEdit', ['jsonParameter' => $tag,'post'=>$post->id]) }}"><button class="btn btn-warning btn-sm"><i class="fa fa-solid fa-edit"></i></button></a></div>
                                <div class="m-1">
                                    {!! Form::open(['method'=>'delete','route'=>['post.destroy',$post->id],'id'=>'form']) !!}
                                        {!! Form::button('<i class="fa fa-solid fa-trash"></i>',['type'=>'button','class'=>'btn btn-danger btn-sm delete']) !!}
                                    {!! Form::close() !!}

                                </div>
                            </div>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
                </table>


                    <!-- Modal -->
                    <div class="modal fade" id="postedImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Posted Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="" id="postedImageId2" class="img-thumbnail" alt="">
                        </div>

                        </div>
                    </div>
                    </div>

            </div>
        </div>


       </div>
    </div>
  </div>
  @if(session('msg'))
     @push('jquery')
        <script>
         Swal.fire({
            position: 'top-end',
            toast:true,
            icon: '{{ session('cls') }}',
            title: '{{ session('msg') }}',
            showConfirmButton: false,
            timer: 3000
        })
        </script>
     @endpush
  @endif

  @push('jquery')
    <script>
        $(document).ready(function(){
          $(".delete").on("click",function(){

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $("#form").submit();
                }
            })
          })

          $(".postedImageId1").on("click",function(){
            let imageUrl = $(this).attr('src');

            let img = $("#postedImageId2");
            img.attr("src",imageUrl);
            img.css({
                "width":"800px",
                "height":"400px"
            })
          })
        })
    </script>
  @endpush
  @endsection




