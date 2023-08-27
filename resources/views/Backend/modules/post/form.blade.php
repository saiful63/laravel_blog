{!! Form::label('title','Title') !!}
{!! Form::text('title',null,['id'=>'title','class'=>$errors->has('name')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter post title']) !!}


{!! Form::label('slug','Slug') !!}
{!! Form::text('slug',null,['id'=>'slug','class'=>$errors->has('slug')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter slug name']) !!}


<div class="row">
  <div class="col-md-6">
    {!! Form::label('category','Category') !!}
    {!! Form::select('category',$categories,null,['class'=>'form-select','id'=>'category','placeholder'=>'Select Category']) !!}

  </div>
  <div class="col-md-6">
    {!! Form::label('sub category','Sub Category') !!}

        <select name="sub_category" id="sub_category" class="form-select">
        <option>Sub category</option>
        </select>


  </div>
</div>

{!! Form::label('description','Description',['class'=>'mt-2']) !!}
{!! Form::textarea('description',null,['id'=>'description','class'=>'form-control','placeholder'=>'Description']) !!}

{!! Form::label('status','Category status',['class'=>'mt-2']) !!}
{!! Form::select('status',[1=>'Active',0=>'Inactive'],null,['class'=>'form-select','placeholder'=>'Enter Post status']) !!}

{!! Form::label('tag','Tag',['class'=>'mt-2 d-block']) !!}
<div class="w-100 d-block">
    @if (Route::currentRouteName()=='tagDataForEdit')
    <ul>
        {{-- Take selected_tga_id and converted to array --}}
       @php
           $selected_tag_id=[];

        foreach($jsonArray as $item){

            array_push($selected_tag_id,$item->id);
        }
       @endphp
    </ul>
    @endif

    @foreach($tags_data as $tag)
        {!! Form::checkbox('tag[]',$tag->id,Route::currentRouteName()=='tagDataForEdit'?in_array($tag->id,$selected_tag_id):null,['placeholder'=>'Enter Tag','class'=>'m-2']) !!} <span>{{ $tag->name }}</span>
    @endforeach
</div>

{!! Form::label('photo','Photo',['class'=>'mt-2']) !!}
{!! Form::file('photo',['class'=>'form-control']) !!}
@if (Route::currentRouteName()=='tagDataForEdit')
     <div class="my-3">
        <img src="{{ url('image/post/original/'.$post->photo) }}"  class="img-thumbnail postedImageId1"   width="300px" height="200px" alt="">
     </div>
@endif

@push('css')
<style>
    .ck.ck-editor__main>.ck-editor__editable{
       min-height: 250px;
    }
</style>

@endpush

@push('jquery')
   <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
   </script>
   <!-- ck editor -->
   <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );

        $(document).ready(function(){
            $("#title").on('input',function(){
                let title = $(this).val();
                let slug = title.replaceAll(' ','-');
                $("#slug").val(slug.toLowerCase());
            });
            function getSelectedSubCategory(selected_id=null){
                let value = $("#category").val();
                 console.log(selected_id);
                $.ajax({
                  url:"{{ route('categoryBySubCategory') }}",
                  method:"get",
                  data:{value:value},
                  success:function(res){
                     console.log(res);
                     $("#sub_category").empty();
                     $.each(res,function(index,value){
                        if(value.id==selected_id){
                           $("#sub_category").append(`<option selected value="${value.id}">${value.name}</option>`);
                        }else{
                            $("#sub_category").append(`<option value="${value.id}">${value.name}</option>`);
                        }

                     });
                  }

                })
            }


            @if(Route::currentRouteName() =='tagDataForEdit')
               getSelectedSubCategory({{ $post->sub_category1->id }})
            @endif


            // If change in category then this will work
            $("#category").on("change",function(){
                getSelectedSubCategory();

            });

        })

    </script>


  @endpush
