@extends('Backend.layouts.master')

@section('title','Show Category')
@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-8 mt-5">
        <div class="card mt-5">
            <div class="card-header">
            <h4>Show Category</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">

                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $sub_category->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $sub_category->slug }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $sub_category->category->name }}</td>
                    </tr>
                    <tr>
                        <th>Order by</th>
                        <td>{{ $sub_category->order_by }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $sub_category->status == 1?'Active':'Inactive' }}</td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td>{{ $sub_category->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                         <td>{{ $sub_category->updated_at != $sub_category->created_at?$sub_category->updated_at->toDayDateTimeString():'Not Updated' }}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>


       </div>
    </div>
  </div>




