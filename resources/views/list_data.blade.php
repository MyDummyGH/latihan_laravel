@extends('template')

@section('judul')
    Home
@endsection

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
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Hobi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataList as $data)
                            <tr>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->hobi }}</td>
                                <td>
                                    <a href="{{ url('edit') . '/' . $data->id }}"><button class="btn btn-primary">Edit</button></a>
                                    <a href="{{ url('delete') . '/' . $data->id }}"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
