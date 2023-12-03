@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.cart')
@extends('web.layouts.footer')

@section('title', 'Register')

@section('content')

    <main class="main">

        @include('web.layouts.container-fluid', [($name = 'Register')])

        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-12">

                    <div class="page-register bg-white p-3">
                        <h1 class="section-title h3"><span>Registration</span></h1>

                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <form action="{{ route('register.store') }}" method="post" class="needs-validation"
                                    novalidate>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label required">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Name Surname" required>
                                        <div class="invalid-feedback">
                                            Name is required
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label required">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="example@exmp.com" required>
                                        <div class="invalid-feedback">
                                            Please, provide a valid email
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label required">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password" required>
                                        <div class="invalid-feedback">
                                            Password is required
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label required">Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="password_confirmation" placeholder="Retype password" required>
                                        <div class="invalid-feedback">
                                            Retype password
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-warning">Registration</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </main>

@endsection
