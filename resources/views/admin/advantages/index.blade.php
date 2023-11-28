@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advantages</h1>
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
                            <h3 class="card-title">List of advantages</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('advantages.create') }}" class="btn btn-primary mb-3">Add a advantage</a>
                            @if (count($advantages))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">#</th>
                                            <th>Title</th>
                                            <th>Icon</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($advantages as $advantage)
                                            <tr>
                                                <td>{{ $advantage->id }}</td>
                                                <td>{{ $advantage->title }}</td>
                                                <td>{{ $advantage->icon }}</td>
                                                <td>
                                                    <a href="{{ route('advantages.edit', ['advantage' => $advantage->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('advantages.destroy', ['advantage' => $advantage->id]) }}"
                                                        method="post" class="float-left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button advantage="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm deletion')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>No advantagess yet...</p>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $advantages->links() }}
                        </div>
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

