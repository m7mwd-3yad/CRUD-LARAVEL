@extends('layouts.app')
@section('MainTitle')
    List All Admins
@endsection

@section('contnet')
@if (Session::has('done'))
<div class="alert alert-success">
    {{ session::get('done') }}
</div>
@endif
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>
                                    <b>#</b>
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td><a  href="{{route('admin.show',$item->id)}}"><i class="fa-solid fa-eye text-info " ></i></a></td>
                                    <td><a  href="{{route('admin.edit',$item->id)}}"><i class="fa-solid fa-pen-to-square text-worning " ></i></a></td>
                                    <td><a  href="{{route('admin.destroy',$item->id)}}"><i class="fa-solid fa-trash text-danger " ></i></a></td>
                                </tr>
                            @empty
                            <h1>NO DATA</h1>
                            @endforelse


                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>

    </div>

@endsection
