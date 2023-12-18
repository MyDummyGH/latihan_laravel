@extends('template')

@section('judul')
    Home
@endsection
@php
    $no = 1;
@endphp
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
            <p class="card-description">
                Add class <code>.table</code>
            </p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Brand</th>
                            <th>Stock</th>
                            <th>Buy Price</th>
                            <th>Sale Price</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataList as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->brand }}</td>
                                <td>{{ $data->stock }}</td>
                                <td>{{ $data->buy_price }}</td>
                                <td>{{ $data->sale_price }}</td>
                                <td>{{ $data->comment }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <a href="{{ url('/products/delete') . '/' . $data->products_id }}"><button
                                            class="btn btn-sm btn-danger">Delete</button></a>
                                    <br />
                                    <br />
                                    <a href="{{ url('/products/edit') . '/' . $data->products_id }}"><button
                                            class="btn btn-sm btn-warning">Edit</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
