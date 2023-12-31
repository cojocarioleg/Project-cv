@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Editing a advantage</h1>
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
                            <h3 class="card-title">Advantage "{{ $advantage->title }}"</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('advantages.update', ['advantage' => $advantage->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Titile</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           value="{{ $advantage->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="advantage_1">Advantage_1</label>
                                    <input type="text" name="advantage_1"
                                           class="form-control @error('title') is-invalid @enderror" id="advantage_1"
                                           value="{{ $advantage->advantage_1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="advantage_2">Advantage_2</label>
                                    <input type="text" name="advantage_2"
                                           class="form-control @error('title') is-invalid @enderror" id="advantage_2"
                                           value="{{ $advantage->advantage_2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="advantage_3">Advantage_3</label>
                                    <input type="text" name="advantage_3"
                                           class="form-control @error('title') is-invalid @enderror" id="advantage_3"
                                           value="{{ $advantage->advantage_1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="advantage_4">Advantage_4</label>
                                    <input type="text" name="advantage_4"
                                           class="form-control @error('title') is-invalid @enderror" id="advantage_4"
                                           value="{{ $advantage->advantage_3 }}">
                                </div>
                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="text" name="icon"
                                           class="form-control @error('title') is-invalid @enderror" id="icon"
                                           value="{{ $advantage->icon }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button advantage="submit" class="btn btn-primary">Save</button>
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

