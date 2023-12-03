@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Editing a image</h1>
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
                            <h3 class="card-title">Image </h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('images.update', ['image' => $image->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="thumbnail">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="input-group-text" for="image">Upload</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ $image->getImage() }}" alt="{{'image'}}"
                                        class="img-thumbnail mt-2" width="200">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product_id">Product</label>
                                <select class="form-control @error('product_id') is-invalid @enderror" id="product_id" name="product_id">
                                    @foreach($products as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
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
