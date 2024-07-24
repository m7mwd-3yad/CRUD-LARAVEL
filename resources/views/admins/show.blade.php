@extends('layouts.app')

@section('MainTitle')
    Show Admin
@endsection

@section('contnet')
<div class="container col-12 ">
    <div class="d-flex flex-wrap justify-content-center  ">
            <div class="card  bg-dark text-light" style="width: 36rem;">
                <img src="{{asset("upload/$admin->image")}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name: {{$admin->name}} </h5>
                    <p class="card-text">email: {{$admin->email}}  </p>
                    <p class="card-text">password:  {{$admin->password}} </p>
                </div>
            </div>
    </div>
</div>
@endsection
