<div class="row mb-3">
    <div class="col-12">
        <h1 class="section-title h3">
            <span>{{$shopCategory->title}}</span>
        </h1>
    </div>
    <div class="col-4 col-sm-2">
        <img src="{{$shopCategory->getImage()}}" alt="{{$shopCategory->title}}" class="img-thumbnail">
    </div>
    <div class="col-8 col-sm-10">
        <p>
            {{$shopCategory->description}}
        </p>
    </div>
</div>
