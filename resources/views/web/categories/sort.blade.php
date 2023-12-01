<div class="row">
    <div class="col-sm-6">
        <div class="input-group mb-3">
            <span class="input-group-text">Sort By:</span>
            <select class="form-select" name="sort" data-url="{{route('shopCategory', $shopCategory->slug)}}" aria-label="Sort by:">
                <option selected>Default</option>
                <option value="1">Name (a-z)</option>
                <option value="2">Name (z-a)</option>
                <option value="3">Price (low &gt; high)</option>
                <option value="4">Price (high &gt; low)</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-3">
            <span class="input-group-text">Show:</span>
            <select class="form-select" name="paginate" aria-label="Show:" data-url="{{route('shopCategory', $shopCategory->slug)}}" >
                <option value="6" selected>6</option>
                <option value="9">9</option>
                <option value="12">12</option>
                <option value="15">15</option>
            </select>
        </div>
    </div>
</div>
