<section class="advantages">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title">
                    <span>Our advantages</span>
                </h2>
            </div>
        </div>

        <div class="row gy-3 items">
            @foreach ($advantages as $advantage)
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p>
                            <i class="{{ $advantage->icon }}"></i>
                        </p>
                        <p>{{ $advantage->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
