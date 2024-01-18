@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class = "card-header">
            <h4>Product Page</h4>
        </div>
        <div class = "card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/product/'.$item->image) }}" class = "cate-image" alt="{{ $item->image }}">     
                                <p>{{ $item->name }}</p>
                                
                            </td>
                            <td>
                                <a href = "{{ url('edit-product/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection