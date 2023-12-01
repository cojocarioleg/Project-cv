@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>contacts</h1>
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
                            <h3 class="card-title">List of contacts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add a contact</a>
                            @if ($contact)
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover ">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">#</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Grafic</th>
                                            <th scope="col">Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $contact->id }}</td>
                                                <td class="text-break">{{ $contact->address }}</td>
                                                <td class="text-break">{{ $contact->grafic }}</td>
                                                <td class="text-break">{{ $contact->phone }}</td>
                                                <td>
                                                    <a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}"
                                                        method="post" class="float-left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm deletion')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>No contacts yet...</p>
                            @endif
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

