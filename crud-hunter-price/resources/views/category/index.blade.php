@extends('layouts.app')
@section('title', 'Category')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2>Categories</h2>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Add a New Category
  </button>
  <br>    <br> 
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>                         
                            <th scope="col">Category ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($categories as $category)                     
                        <tr class="">
                            <td scope="row">{{$category->id}} </td>
                            <td scope="row">{{$category->category_name}} </td>                      
                            <td>
                                   <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$category->id}}">
                                Edit
                              </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$category->id}}">
                                Delete
                              </button>
                            </td>
                        </tr>
                    @include('category.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('category.create')
        </div>
        <div class="col-md-2"></div>
    </div>    
    @endsection