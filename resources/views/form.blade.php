@extends('template')

@section('judul')
    Form
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form {{ $data['type'] }}</h4>
            <p class="card-description">
                Inputin
            </p>
            @if ($data['type'] === 'Edit')
                <form class="forms-sample" method="POST" action="{{ url('editdata') . '/' . $editData->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputUsername1"
                            placeholder="Nama" value="{{ $editData->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="exampleInputPassword1"
                            placeholder="Kelas" value="{{ $editData->kelas }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hobi</label>
                        <input type="text" name="hobi" class="form-control" id="exampleInputEmail1" placeholder="Hobi"
                            value="{{ $editData->hobi }}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            @else
                <form class="forms-sample" method="POST" action="{{ url('request') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputUsername1"
                            placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="exampleInputPassword1"
                            placeholder="Kelas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hobi</label>
                        <input type="text" name="hobi" class="form-control" id="exampleInputEmail1"
                            placeholder="Hobi">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            @endif

        </div>
    </div>
@endsection
