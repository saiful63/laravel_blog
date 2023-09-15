@extends('Backend.layouts.master')

@section('title','User role')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-8 mt-5">
        <div class="card mt-5">
          <div class="card-body">
             <ul>
                @foreach ($assigned_users_get_role as $items)
                    <li>Role : {{ $items->name }}</li>
                    <ul>
                        @foreach ($items->users as $user)
                        <li>{{ $user->name }}</li>
                        @endforeach
                    </ul>

                @endforeach

            </ul>
          </div>
        </div>
        <div class="card mt-5">
            <div class="card-header">
            <h4>Assign user to role</h4>
             
            </div>



            <div class="card-body">
                <form action="{{ route('roleAssign') }}" method="post" id="form">
                    @csrf
                <div class="row">

                        <div class="col-md-2">

                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="user">
                                <option value="0">Select user</option>
                                @foreach ($users as $user)

                                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="role">
                                <option value="0">Select role</option>
                                @foreach ($roles as $role)assigned_users_get_role
                                  <option value="{{ $role->id }}" >{{ $role->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-sm btn-primary w-50">Assign</button>
                        </div>

                        </div>
                    </form>
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
            $("#user").change(function(){
                let user_id = $(this).val();
                console.log(user_id);
                $('<input type="hidden" name="user_id" value="'+user_id+'">').appendTo("#form");
            })

            $("#role").change(function(){
                let role_id = $(this).val();
                console.log(role_id);
                $('<input type="hidden" name="role_id" value="'+role_id+'">').appendTo("#form");
            })
        })
    </script>
  @endpush

  @endsection





