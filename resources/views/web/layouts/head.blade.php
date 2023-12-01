@section('head')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>E-shop :: @yield('title')</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="{{asset('assets/web/owlcarousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/web/owlcarousel/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/web/css/main.css')}}">
	<link rel="shortcut icon" href="{{asset('assets/images/co.png')}}" type="image/x-icon">
</head>
@endsection
