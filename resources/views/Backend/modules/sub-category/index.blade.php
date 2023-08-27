@extends('Backend.layouts.master')

@section('title','Sub Category')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-8 mt-5">
        <div class="card mt-5">
            <div class="card-header">
            <h4>View Sub Category</h4>
            </div>

            <div class="card-body">

                <table class="table table-bordered table-striped table-hover">
                <div class="float-end"><a href="{{ route('sub-category.create') }}" class="btn btn-success btn-sm mb-2">Create Sub category</a></div>
                   <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Category</th>
                        <th>Order by</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sn=1 @endphp
                    @foreach ($sub_categories as $sub_category)

                    <tr>
                        <td>{{ $sn++ }}</td>
                        <td>{{ $sub_category->name }}</td>
                        <td>{{ $sub_category->slug }}</td>
                        <td>{{ $sub_category->category->name }}</td>
                        <td>{{ $sub_category->order_by }}</td>
                        <td>{{ $sub_category->status == 1?'Active':'Inactive' }}</td>
                        <td>{{ $sub_category->created_at->toDayDateTimeString() }}</td>
                        <td>{{ $sub_category->updated_at != $sub_category->created_at?$sub_category->updated_at->toDayDateTimeString():'Not Updated' }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <div class="m-1"><a href="{{ route('sub-category.show',$sub_category->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-solid fa-eye"></i></button></a></div>
                                <div class="m-1"><a href="{{ route('sub-category.edit',$sub_category->id) }}"><button class="btn btn-warning btn-sm"><i class="fa fa-solid fa-edit"></i></button></a></div>
                                <div class="m-1">
                                    {!! Form::open(['method'=>'delete','route'=>['sub-category.destroy',$sub_category->id],'id'=>'form']) !!}
                                        {!! Form::button('<i class="fa fa-solid fa-trash"></i>',['type'=>'button','class'=>'btn btn-danger btn-sm delete']) !!}
                                    {!! Form::close() !!}

                                </div>
                            </div>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
                </table>
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
        })
    </script>
  @endpush
  @endsection




