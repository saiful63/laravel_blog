@extends('Backend.layouts.master')

@section('title','Tag')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-8 mt-5">
        <div class="card mt-5">
            <div class="card-header">
            <h4>View Tag</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">

                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $tag->name }}</td>
                    </tr>
                    <tr>
                        <th>Tag</th>
                        <td>{{ $tag->tag }}</td>
                    </tr>
                    <tr>
                        <th>Order by</th>
                        <td>{{ $tag->order_by }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $tag->status == 1?'Active':'Inactive' }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $tag->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                         <td>{{ $tag->updated_at != $tag->created_at?$tag->updated_at->toDayDateTimeString():'Not Updated' }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>


       </div>
    </div>
  </div>




