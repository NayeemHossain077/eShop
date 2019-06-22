@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('product/add') }}">Product List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $singleProduct->product_name }}</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header bg-primary">
                    Edit Product
                </div>
                <div class="card-body">
                    @if (session('updateStatus'))
                    <div class="alert alert-success">
                        {{ session('updateStatus') }}
                    </div>
                    @endif
                    <form action="{{ url('product/update') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $singleProduct->id }}"/>
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="product_name" value="{{ $singleProduct->product_name }}">
                        </div>
                        <div class="form-group">
                            <label for="productDesc">Product Description</label>
                            <textarea id="productDesc" class="form-control" rows="3" name="product_desc">{{ $singleProduct->product_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input type="integer" class="form-control" id="productPrice" name="product_price" value="{{ $singleProduct->product_price }}">
                        </div>
                        <div class="form-group">
                            <label for="productQty">Product Quantity</label>
                            <input type="integer" class="form-control" id="productQty" name="product_qty" value="{{ $singleProduct->product_qty }}">
                        </div>
                        <div class="form-group">
                            <label for="alertQty">Alert Quantity</label>
                            <input type="integer" class="form-control" id="alertQty" name="alert_qty" value="{{ $singleProduct->alert_qty }}">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-primary ">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection