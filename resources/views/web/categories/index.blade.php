@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.flash')
@extends('web.layouts.cart')
@extends('web.layouts.footer')

@section('title')
    {{ $shopCategory->title }}
@endsection

@section('content')
    <main class="main">

        @include('web.layouts.container-fluid', ['name' => $shopCategory->title])

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    @include('web.categories.sidebar')
                </div>

                <div class="col-lg-9 col-md-8">
                    @include('web.categories.section-title')

                    <hr>

                    @include('web.categories.sort')
                    <div class="product-sort">
                        @include('web.layouts.products', ['products' => $products])
                    </div>


                </div>
            </div>
        </div>

    </main>
@endsection
@section('js')
    <script src="{{ asset('assets/web/js/sort.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('input[name="color"]:radio').on("click", function() {
                let color = $(this).val();
                let url = $(this).data("url");
                $.ajax({
                    url: url,
                    type: "GET",
                    data: {
                        color: color,
                    },
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: (data) => {
                        console.log('ok');
                    },
                });
            });

        });
    </script>
@endsection
