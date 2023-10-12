@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @if (session('status'))
                <div class="alert alert-success">
                   {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <h1 class=" text-warning text-center pb-4 ">ALL REGISTERD PEOPLE</h1>
    <table class="table table-dark text-center " >
        <thead style="background-color: #04AA6D; ">
            <tr>
                <th scope="col">#SL</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peoples as $key=>$people )
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $people->first_name}}</td>
                <td>{{ $people->last_name}}</td>
                <td>{{ $people->email}}</td> 
            </tr>      
         @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('createtable')}}">Registere Page</a>
</div>
@endsection 
 
 
