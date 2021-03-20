@extends('layouts.adminox')

@section('page_name')
Home   
@endsection
@section('breadcumb')
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
</ol> 
@endsection



 @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-box">
                <div class="card-header bg-dark text-light text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">SERIAL</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">LOGIN STATUS</th>
                                </tr>
                            </thead>
                                <tbody>
                                @foreach ($db_data as $item)
                                    <tr>
                                        <th>{{ $item->id }}</th>
                                        <td>{{ $loop->iteration }}</</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->created_at->diffForHumans()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

