@section('header')
    <header class="header">
        <div class="header-top py-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-sm-4">
                        <div class="header-top-phone d-flex align-items-center h-100">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <a href="tel:{{$contact->phone}}" class="ms-2">{{$contact->phone}}</a>
                        </div>
                    </div>

                    <div class="col-sm-4 d-none d-sm-block">
                        <ul class="social-icons d-flex justify-content-center">
                            @foreach ($networks as $network)
                                <li>
                                    <a href="{{ $network->link }}">
                                        <i class="fa-brands fa-{{ strtolower($network->title) }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4">
                        <div class="header-top-account d-flex justify-content-end">
                            <div class="btn-group me-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Account
                                    </button>

                                    <ul class="dropdown-menu">
                                        @if (Auth::check())
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}">Sign Up</a>
                                            </li>
                                        @else
                                            <li>
                                                <a class="dropdown-item" href="{{ route('login') }}">Sign In</a>
                                            </li>
                                        @endif


                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                       RO
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">RU</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">EN</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ./header-top-account -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ./header-top -->

        <div class="header-middle bg-white py-4">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-sm-6">
                        <a href="{{route('home')}}" class="header-logo h1">E-Shop</a>
                    </div>

                    <div class="col-sm-6 mt-2 mt-md-0">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="s" placeholder="Searching..."
                                    aria-label="Searching..." aria-describedby="button-search">
                                <button class="btn btn-outline-warning" type="submit" id="button-search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <!-- ./header-middle -->
    </header>
@endsection
