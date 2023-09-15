@extends('Backend.layouts.master')

@section('title','Post')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
            <h4>Update profile</h4>
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
                <div class="card_body_inner w-75">


                <form action="{{ route('updateProfile') }}" method="post" class="form-control" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">

                    <label for="" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}">

                    <label for="" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Give new password if want to update">

                    <label for="" class="form-label">Specify Address</label>
                    <div class="row">
                        <div class="col-md-4">
                            <select name="division" class="form-select" id="division">
                                @if($user->division)
                                @php
                                    $user_division_value = explode(',',$user->division);

                                @endphp
                                    <option value="" selected>{{ $user_division_value[1] }}</option>
                                    @else
                                    <option value="">Select Division</option>
                                @endif


                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id}},{{ $division->name }}">{{ $division->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-4">

                            <select name="district" class="form-select" id="district">
                                @if($user->district)
                                @php
                                    $user_district_value = explode(',',$user->district);

                                @endphp
                                    <option value="" selected>{{ $user_district_value[1] }}</option>
                                    @else
                                    <option value="">Select District</option>
                                @endif

                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="upazila" class="form-select" id="upazila">
                                @if($user->upazila)
                                @php
                                    $user_upazila_value = explode(',',$user->upazila);

                                @endphp
                                    <option value="" selected>{{ $user_upazila_value[1] }}</option>
                                    @else
                                    <option value="">Select Upazila</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <label for="" class="form-label">Your photo</label>
                    <input type="hidden" name="photo_invisible" value="{{ $user->photo }}">
                    <input type="file" class="form-control" name="photo">
                    <div>
                        <img src="{{ asset('image/profile/'.$user->photo) }}" class="mt-3 rounded w-25" alt="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-2">Update</button>
                </form>
                </div>
            </div>
        </div>


       </div>
    </div>
  </div>

@push('jquery')
   <script>
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
  
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $(document).ready(function(){
      $("#division").change(function(){
        let division_value = $(this).val();
        let division_id = division_value.split(',')[0];

        $.ajax({
            url:"{{ route('sentDivisionData') }}",
            method:"POST",
            data:{division_id:division_id},
            success:function(res){
              $.each(res,function(index,value){
                $("#district").append(`<option value='${value.id},${value.name}'>${value.name}</option>`);
              })

            }
        })
      })


      $("#district").change(function(){
        let district_value = $(this).val();

        let district_id = district_value.split(',')[0];
        console.log(district_id);

        $.ajax({
            url:"{{ route('sentDistrictData') }}",
            method:"POST",
            data:{district_id:district_id},
            success:function(res){
              $.each(res,function(index,value){
                $("#upazila").append(`<option value='${value.id},${value.name}'>${value.name}</option>`);
              })

            }
        })
      })
    })
   </script>


@endpush

@endsection


