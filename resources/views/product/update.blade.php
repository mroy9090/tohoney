@extends('layouts.adminox')
@section('page_name')
Update 
@endsection

@section('breadcumb')
<ol class="breadcrumb float-right">
    <li class="breadcrumb-item"><a href="{{ url('product') }}">product</a></li>
    <li class="breadcrumb-item">update</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $data_product->product_name }}</li>
</ol> 
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 m-auto">
            <div class="card-box">
                <div class="card-header  bg-warning text-dark">Update product name</div>
                    <div class="card-body text-dark">
                       		<form action="{{ route('product_update_post') }}" method="POST">
                            <input type="hidden" value="{{ $data_product->id }}" name="product_id">
                        <label class="form-label">category Name</label>
                        <select name="update_category_id"  class="form-control">
                            @foreach ($category_list as $category)
                                <option value="{{ $category->id }}" {{ ($data_product->category_id == $category->id) ? 'selected' : '' }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @csrf
                            <div class="mb-3">
                                <label class="form-label">product Name</label>
                                <input type="text" class="form-control" name="update_product_name" value="{{ $data_product->product_name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">product price</label>
                                <input type="number" class="form-control" name="update_product_price"  value="{{ $data_product->product_price}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">product quantity</label>
                                <input type="number" class="form-control" name="update_product_quantity"  value="{{ $data_product->product_quantity }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">product short description</label>
                                <textarea name="update_product_short_description"  class="form-control" rows="10">{{ $data_product->product_short_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">product long description</label>
                                <textarea name="update_product_long_description"  class="form-control" rows="10">{{ $data_product->product_long_description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alert quantity</label>
                                <input type="number" class="form-control" name="update_alert_product_quantity"  value="{{ $data_product->alert_product_quantity }}">
                            </div>
                            <button type="submit" class="btn btn-danger">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>
    
@endsection