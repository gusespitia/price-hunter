@extends('layouts.app')
@section('title', 'Store')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">         
            <h2>Stores</h2>      
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Add a New Store
  </button>
  <br>    <br> 
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>                         
                            <th scope="col">Store ID</th>
                            <th scope="col">Store Name</th>              
                            <th scope="col">Logo</th>    
                            <th scope="col">Store URL</th>                  
                            <th scope="col">Status</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($stores as $store)                     
                        <tr class="">
                            <td scope="row">{{$store->id}} </td>
                            <td scope="row">{{$store->store_name}} </td>
                            <td><img src="{{ $store->store_logo }}" alt="{{ $store->store_name }}" width="80"> </td>
                            <td>{{ $store->store_url }}</td>  
                            <td>{{ $store->store_status }}</td>
                            <td>
                                   <!-- Button trigger modal -->

                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$store->id}}">
                                    Edit
                                  </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$store->id}}">
                                    Delete
                                  </button>
                                </td>
                            </tr>
                        @include('store.info')
                            @endforeach
                    </tbody>
                </table>
            </div>
            @include('store.create')
        </div>
        <div class="col-md-2"></div>
    </div>    
    @endsection