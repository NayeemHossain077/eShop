@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Product List
                    </div>
                    <div class="card-body">
                        @if (session('deleteStatus'))
                        <div class="alert alert-danger">
                            {{ session('deleteStatus') }}
                        </div>
                        @endif
                        <table class="table small table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Alert Quantity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_desc }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_qty }}</td>
                                <td>{{ $product->alert_qty }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <a href="{{ url('product/edit') }}/{{ $product->id }}"  class="btn btn-outline-secondary">Edit</a>
                                        <a href="{{ url('product/draft') }}/{{ $product->id }}" class="btn btn-outline-danger">Draft</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="7">No Product Found to Show.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Drafted Product List
                    </div>
                    <div class="card-body">
                        <table class="table small table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Alert Quantity</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($deleted_products as $deleted_product)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $deleted_product->product_name }}</td>
                                <td>{{ $deleted_product->product_desc }}</td>
                                <td>{{ $deleted_product->product_price }}</td>
                                <td>{{ $deleted_product->product_qty }}</td>
                                <td>{{ $deleted_product->alert_qty }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <a href="{{ url('product/restore') }}/{{ $deleted_product->id }}" class="btn btn-outline-success">Resotre</a>
                                        <a href="{{ url('product/delete') }}/{{ $deleted_product->id }}" class="btn btn-outline-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr class="text-center">
                                <td colspan="8">No Products are Deleted.</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        Add Product
                    </div>
                    <div class="card-body">
                        @if (session('addStatus'))
                        <div class="alert alert-success">
                            {{ session('addStatus') }}
                        </div>
                        @endif

                        @if ($errors->all())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </div>
                        @endif
                        <form action="{{ url('product/insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="product_name" value="{{ old('product_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="productDesc">Product Description</label>
                                <textarea id="productDesc" class="form-control" rows="3" name="product_desc">{{ old('product_desc') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="productPrice">Product Price</label>
                                <input type="integer" class="form-control" id="productPrice" name="product_price" value="{{ old('product_price') }}">
                            </div>
                            <div class="form-group">
                                <label for="productQty">Product Quantity</label>
                                <input type="integer" class="form-control" id="productQty" name="product_qty" value="{{ old('product_qty') }}">
                            </div>
                            <div class="form-group">
                                <label for="alertQty">Alert Quantity</label>
                                <input type="integer" class="form-control" id="alertQty" name="alert_qty" value="{{ old('alert_qty') }}">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-primary ">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection