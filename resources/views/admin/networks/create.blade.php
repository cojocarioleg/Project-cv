@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adding a network</h1>
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
                            <h3 class="card-title">Adding a network</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('networks.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input network="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="title">
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input network="text" name="link"
                                           class="form-control @error('title') is-invalid @enderror" id="link"
                                           placeholder="Link">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button network="submit" class="btn btn-primary">Save</button>
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
