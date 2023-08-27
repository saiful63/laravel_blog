{!! Form::label('name','Name') !!}
{!! Form::text('name',null,['id'=>'name','class'=>$errors->has('name')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter category name']) !!}


{!! Form::label('slug','Slug') !!}
{!! Form::text('slug',null,['id'=>'slug','class'=>$errors->has('slug')?'is-invalid form-control form-control-sm':'form-control form-control-sm','placeholder'=>'Enter slug name']) !!}

{!! Form::label('order_by','Category serial',['class'=>'mt-2']) !!}
{!! Form::number('order_by',null,['class'=>'form-control','placeholder'=>'Enter Category serial']) !!}


{!! Form::label('status','Category status',['class'=>'mt-2']) !!}
{!! Form::select('status',[1=>'Active',0=>'Inactive'],null,['class'=>'form-select','placeholder'=>'Enter Category status']) !!}
