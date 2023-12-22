@section('cart')
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="table-responsive">
                <table class="table offcanvasCart-table">
                    <tbody>
                        @if ($order)
                            @foreach ($order->products as $product)
                                <tr>
                                    <td class="product-img-td">
                                        <a href="#">
                                            <img src="{{ $product->getImage() }}" alt="{{ $product->title }}">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">{{ $product->title }}</a>
                                    </td>
                                    @if ($product->new_price)
                                        <td>{{ $product->new_price }}
                                            {{ App\Helpers\CurrencyConversionHelper::getCurrencySymbol() }}
                                        </td>
                                    @else
                                        <td>{{ $product->price }}
                                            {{ App\Helpers\CurrencyConversionHelper::getCurrencySymbol() }}
                                        </td>
                                    @endif
                                    <td>&times;
                                        {{ $product->pivot->count }}
                                    </td>
                                    <td>
                                        <form action="{{ route('removeBasket', $product->id) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" id="btn-danger"
                                                onclick="return confirm('are your sure?')">
                                                <i class="fa-regular fa-circle-xmark"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                        @endif



                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-end">Total:</td>
                            <td>
                                @if ($order)
                                    {{ $order->getFullPrice() }}
                                    {{ App\Helpers\CurrencyConversionHelper::getCurrencySymbol() }}
                                @else
                                    {{ 0 }}
                                    {{ App\Helpers\CurrencyConversionHelper::getCurrencySymbol() }}
                                @endif

                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="text-end mt-3">
                <a href="{{ route('cart') }}" class="btn btn-outline-warning">Cart</a>
                <a href="{{ route('checkout') }}" class="btn btn-outline-secondary">Checkout</a>
            </div>

        </div>
    </div>
@endsection
