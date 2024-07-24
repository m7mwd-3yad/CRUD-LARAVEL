@extends('layouts.app')

@section('MainTitle')
    Create New Admin
@endsection

@section('contnet')
    @if (Session::has('done'))
        <div class="alert alert-success">
            {{ session::get('done') }}
        </div>
    @endif

    <form class="row g-3" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <input type="text" name="name" class="form-control" placeholder="Your Name">
        </div>
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-md-6">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="col-md-12">
            <input type="file" name="image" class="form-control" placeholder="image">
        </div>
        <div class="text-center">
            <button type="submit" name="send" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form><!-- End No Labels Form -->
@endsection
