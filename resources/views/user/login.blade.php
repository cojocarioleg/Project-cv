@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.cart')
@extends('web.layouts.footer')

@section('title', 'Login')

@section('content')
<main class="main">

    @include('web.layouts.container-fluid', [$name ='Login'])

    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-12">

                <div class="page-register bg-white p-3">
                    <h1 class="section-title h3"><span>Login</span></h1>

                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="{{ route('login') }}" method="post" novalidate>
                                @csrf


                                <div class="mb-3">
                                    <label for="email" class="form-label required">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                        required>
                                    <div class="invalid-feedback">
                                        Please, provide a valid email
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label required">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-warning">Login</button>
                                    <a class="btn btn-primary" href="{{route('register.create')}}" role="button">Register</a>
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



