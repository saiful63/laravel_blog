@extends('Backend.layouts.master')

@section('title','Category')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-8 mt-5">
        <div class="card mt-5">
            <div class="card-header">
            <h4>View Category</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">

                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $category->slug }}</td>
                    </tr>
                    <tr>
                        <th>Order by</th>
                        <td>{{ $category->order_by }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $category->status == 1?'Active':'Inactive' }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $category->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                         <td>{{ $category->updated_at != $category->created_at?$category->updated_at->toDayDateTimeString():'Not Updated' }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>


       </div>
    </div>
  </div>




