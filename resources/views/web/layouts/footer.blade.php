@section('footer')
    <footer class="footer" id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Payment</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Working Grafic</h4>
                    <ul class="list-unstyled">
                        <li>{{$contact->address}}</li>
                        <li>{{$contact->grafic}}</li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Contacts</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></li>
                        <li><a href="tel:0987654321">098-765-4321</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Follow us</h4>
                    <ul class="footer-icons">
                        @foreach ($networks as $network)
                            <li>
                                <a href="{{ $network->link }}">
                                    <i class="fa-brands fa-{{ strtolower($network->title) }}"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <button id="top">
        <i class="fa-solid fa-angles-up"></i>
    </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/web/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/main.js') }}"></script>
    @yield('js')
@endsection
