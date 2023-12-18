@extends('template')

@section('judul')
    Form
@endsection

@section('content')
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $data['type'] }} Products</h4>
                @if ($data['type'] === 'Edit')
                    <form class="forms-sample" method="POST" action="{{ url('products/editdata').'/'.$editData[0]->products_id }}">
                        @csrf
                        <p class="card-description">
                            Edit Data
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control" id="InputName"
                                            placeholder="Nama" value="{{ $editData[0]->nama }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Stock</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="stock" class="form-control" id="InputStock"
                                            placeholder="Stock" value="{{ $editData[0]->stock }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Brands</label>
                                    <div class="col-sm-9">
                                        <select name="brand" class="form-control" id="SelectBrands" required>
                                            @foreach(['Indofood', 'Wings', 'Orang Tua'] as $brand)
                                                <option value="{{ $brand }}" {{ $editData[0]->brand == $brand ? 'selected' : '' }}>
                                                    {{ $brand }}
                                                </option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Discount Status</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status"
                                                    id="status1" value="Yes" {{ $editData[0]->status == 'Yes' ? 'checked' : '' }} required>
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status"
                                                    id="status2" value="No" {{ $editData[0]->status == 'No' ? 'checked' : '' }} required>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Buy Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="buy_price" class="form-control" id="InputBuyPrice"
                                            placeholder="Buy Price" value="{{ $editData[0]->buy_price }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sale Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="sale_price" class="form-control" id="InputSalePrice"
                                            placeholder="Sale Price" value="{{ $editData[0]->sale_price }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Comment</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="comment" class="form-control" id="InputComment"
                                            placeholder="Comment" value="{{ $editData[0]->comment }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </form>
                @else
                    <form class="forms-sample" method="POST" action="{{ url('products/request') }}">
                        @csrf
                        <p class="card-description">
                            Input Data
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control"
                                            id="InputName" placeholder="Nama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Stock</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="stock" class="form-control"
                                            id="InputStock" placeholder="Stock" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Brands</label>
                                    <div class="col-sm-9">
                                        <select name="brand" class="form-control" id="SelectBrands" required>
                                            <option value="Indofood">Indofood</option>
                                            <option value="Wings">Wings</option>
                                            <option value="Orang Tua">Orang Tua</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Discount Status</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status"
                                                    id="status1" value="Yes" required>
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status"
                                                    id="status1" value="No" required>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Buy Price</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="buy_price" class="form-control"
                                            id="InputBuyPrice" placeholder="Buy Price" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sale Price</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="sale_price" class="form-control"
                                            id="InputSalePrice" placeholder="Sale Price" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Comment</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="comment" class="form-control"
                                            id="InputComment" placeholder="Comment" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
