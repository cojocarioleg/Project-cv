<div class="sidebar">

    <button class="btn btn-warning w-100 text-start collapse-filters-btn mb-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapseFilters" aria-expanded="false"
        aria-controls="collapseExample">
        <i class="fa-solid fa-filter"></i> Filters
    </button>

    <div class="collapse collapse-filters" id="collapseFilters">
        <div class="filter-block">
            <h5 class="section-title"><span>Filter by color</span></h5>
            <form action="">
                @foreach ($colors as $color)
                <div class="form-check d-flex justify-content-between">
                    <div>
                        <input class="form-check-input" type="checkbox" name="color" value="{{$color->slug}}" id="{{$color->slug}}">
                        <label class="form-check-label" for="{{$color->slug}}">
                            {{$color->title}}
                        </label>
                    </div>
                    <span class="badge border rounded-0">
                        {{$color->products->count()}}
                    </span>
                </div>
                @endforeach

            </form>
        </div>

        <div class="filter-block">
            <h5 class="section-title">
                <span>Filter by size</span>
            </h5>

            <form action="">
                @foreach ($sizes as $size )
                <div class="form-check d-flex justify-content-between">
                    <div>
                        <input class="form-check-input" name="size" type="checkbox" value="{{$size->slug}}" id="{{$size->slug}}">
                        <label class="form-check-label" for="{{$size->slug}}">
                            {{$size->title}}
                        </label>
                    </div>
                    <span class="badge border rounded-0">
                        {{$size->products->count()}}
                    </span>
                </div>
                @endforeach
            </form>
        </div>

        <div class="filter-block">
            <h5 class="section-title">
                <span>Filter by type</span>
            </h5>

            <form action="">
                @foreach ($types as $type )
                <div class="form-check d-flex justify-content-between">
                    <div>
                        <input class="form-check-input" name="type" type="checkbox" value="{{$type->slug}}" id="{{$type->slug}}">
                        <label class="form-check-label" for="{{$type->slug}}">
                            {{$type->title}}
                        </label>
                    </div>
                    <span class="badge border rounded-0">
                        {{$type->products->count()}}
                    </span>
                </div>
                @endforeach

            </form>
        </div>
    </div>


</div>
