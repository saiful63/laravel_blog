@extends('Backend.layouts.master')

@section('title','Post')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">

       <div class="col-md-7 mt-5">
        <div class="card mt-5">
            <div class="card-header">
            <h4>View Post</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">

                <tbody>
                    <tr>
                        <th>Title</th>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $post->slug }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{!! $post->description !!}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $post->category1->name }}</td>
                    </tr>
                    <tr>
                        <th>Sub category</th>
                        <td>{{ $post->sub_category1->name }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>{{ $post->status == 1?'Published':'Unpublished' }}</td>
                    </tr>
                    <tr>
                        <th class="align-middle">Photo</th>
                        <td class="align-middle">
                         <img src="{{ url('image/post/original/'.$post->photo) }}"  class="img-thumbnail postedImageId1"   width="300px" height="200px" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $post->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                         <td>{{ $post->updated_at != $post->created_at?$post->updated_at->toDayDateTimeString():'Not Updated' }}</td>
                    </tr>
                    <tr>
                        <th>Tags</th>
                         <td>
                            @php
                            $tag_colours = ['btn-primary','btn-danger','btn-info','btn-warning'];
                            @endphp
                            @foreach ($post->tags as $item)
                               <p class="btn btn-sm {{ $tag_colours[random_int(0,3)] }}">{{ $item->tag }}</p>
                            @endforeach
                         </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>


       </div>

       <div class="col-md-4 mt-5">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Category Details</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $post->category1->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $post->category1->slug }}</td>
                    </tr>
                    <tr>
                        <th>Order by</th>
                        <td>{{ $post->category1->order_by }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $post->category1->status == 1?'Active':'Not active' }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $post->category1->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                         <td>{{ $post->category1->updated_at != $post->category1->created_at?$post->category1->updated_at->toDayDateTimeString():'Not Updated' }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-header">
                <h4>Sub category Details</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $post->sub_category1->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $post->sub_category1->slug }}</td>
                    </tr>
                    <tr>
                        <th>Order by</th>
                        <td>{{ $post->sub_category1->order_by }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $post->sub_category1->status == 1?'Active':'Not active' }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $post->sub_category1->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                         <td>{{ $post->sub_category1->updated_at != $post->sub_category1->created_at?$post->sub_category1->updated_at->toDayDateTimeString():'Not Updated' }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
       </div>
    </div>
  </div>
  @endsection




