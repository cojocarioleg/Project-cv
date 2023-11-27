@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Product</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Titile" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3" placeholder="description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price"
                                           class="form-control @error('price') is-invalid @enderror" id="price"
                                           placeholder="Price" required>
                                </div>

                                <div class="form-group">
                                    <label for="new_price">New Price</label>
                                    <input type="text" name="new_price"
                                           class="form-control @error('new_price') is-invalid @enderror" id="new_price"
                                           placeholder="New Price">
                                </div>

                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input type="text" name="qty"
                                           class="form-control @error('qty') is-invalid @enderror" id="qty"
                                           placeholder="Qty" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                        @foreach($categories as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="colors">Colors</label>
                                    <select name="colors[]" id="colors" class="select2" multiple="multiple"
                                            data-placeholder="colors selection" style="width: 100%;">
                                        @foreach($colors as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sizes">Sizes</label>
                                    <select name="sizes[]" id="sizes" class="select2" multiple="multiple"
                                            data-placeholder="sizes selection" style="width: 100%;">
                                        @foreach($sizes as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sizes">Types</label>
                                    <select name="types[]" id="types" class="select2" multiple="multiple"
                                            data-placeholder="types selection" style="width: 100%;">
                                        @foreach($types as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sizes">Offers</label>
                                    <select name="offers[]" id="offers" class="select2" multiple="multiple"
                                            data-placeholder="types selection" style="width: 100%;">
                                        @foreach($offers as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="thumbnail">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="input-group-text" for="image">Upload</label>
                                            <input type="file" name="image" class="form-control" id="image">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
