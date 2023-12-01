@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Editing a contact</h1>
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
                            <h3 class="card-title">Edit "contact"</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post"
                            action="{{ route('contacts.update', ['contact' => $contact->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body text-break">
                                <div class="card-body ">
                                    <label for="address">Address</label>
                                    <input type="text" name="address"
                                        class="form-control @error('address') is-invalid @enderror" id="address"
                                        value="{{$contact->address}}" required>
                                </div>
                                <div class="card-body ">
                                    <label for="grafic">Grafic</label>
                                    <input type="text" name="grafic"
                                        class="form-control @error('grafic') is-invalid @enderror" id="grafic"
                                        value="{{$contact->grafic}}" required>
                                </div>

                                <div class="card-body ">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('grafic') is-invalid @enderror" id="phone"
                                        value="{{$contact->phone}}" required>
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
