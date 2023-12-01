@section('nav')
    <div class="header-bottom sticky-top" id="header-nav">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" id="offcanvasNavbar" tabindex="-1"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Catalog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Payment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Delivery</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" data-bs-auto-close="outside">
                                    Categories
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a class="dropdown-item" href="{{route('shopCategory', $category->slug)}}">
                                                {{ $category->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <a href="#" class="btn p-1">
                        <i class="fa-solid fa-heart"></i>
                        <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">3</span>
                    </a>

                    <button class="btn p-1" id="cart-open" type="button" data-bs-toggle="offcanvas2"
                        data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">5</span>
                    </button>
                </div>

            </div>
        </nav>
    </div>
@endsection
