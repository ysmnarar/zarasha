@extends('Template.base')

@section('title', 'Product')

@section('content')
    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index.product')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between" style="display: flex">
                            <a href="{{ route('admin.form.product') }}" class="btn btn-primary btn-md ">Add Product</a>
                            <a href="{{ route('product.toner')}}" class="btn btn-light btn-md">Toner</a>
                            <a href="{{ route('product.facial.wash')}}" class="btn btn-light btn-md">Facial Wash</a>
                            <a href="{{ route('product.serum')}}" class="btn btn-light btn-md">serum</a>
                            <a href="{{ route('product.moisturizer')}}" class="btn btn-light btn-md">moisturizer</a>
                            <a href="{{ route('product.sunscreen')}}" class="btn btn-light btn-md">sunscreen</a>
                            <a href="{{ route('product.lipbalm')}}" class="btn btn-light btn-md">lipbalm</a>
                            <div class="card-tools">
                                <div class="input-group input-group input-group-sm" style="width: 170px;">
                                    <form action="{{ route('product.search')}}" method="get">
                                        <div class="input-group-append">
                                            <input type="search" name="search" class="form-control float-right"
                                                placeholder="Search">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <!-- Alert Create -->
                            @if (Session::get('Create'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('Create') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <!-- End Alert Create -->

                            <!-- Alert Update -->
                            @if (Session::get('Update'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('Update') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <!-- End Alert Update -->

                            <!-- Alert Delete -->
                            @if (Session::get('Delete'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('Delete') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <!-- End Alert Delete -->

                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Inventory</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $row)
                                        <tr>
                                            <td>
                                                <a href="{{ route('admin.edit.product', $row->id)}}" class="btn btn-secondary btn-sm"><i
                                                        class="fa-solid fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{ $row->id }}"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/' . $row->img ) }}"
                                                    alt="{{ $row->name }}" class="img-fluid">
                                            </td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->category_id }}</td>
                                            <td>{{ $row->inventory }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td>{{ $row->status }}</td>
                                            <td>
                                                <a href="#" class="btn btn-secondary" data-toggle="modal"
                                                    data-target="#desc{{ $row->id }}">desc</i></a>
                                            </td>
                                        </tr>
                                        @include('Admin.Product.descProduct')
                                        @include('Admin.Product.deleteProduct')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Content -->
@endsection
