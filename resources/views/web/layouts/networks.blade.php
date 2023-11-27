<ul class="social-icons d-flex justify-content-center">
    @foreach ($networks as $network)
    <li>
        <a href="{{$network->link}}">
            <i class="fa-brands fa-{{strtolower($network->title)}}"></i>
        </a>
    </li>
    @endforeach
</ul>
