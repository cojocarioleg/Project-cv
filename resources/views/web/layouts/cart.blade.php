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
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="assets/img/products/1.jpg" alt=""></a>
                        </td>
                        <td><a href="#">Product 1 Lorem ipsum dolor, sit amet consectetur adipisicing.</a></td>
                        <td>$65</td>
                        <td>&times;1</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="assets/img/products/2.jpg" alt=""></a>
                        </td>
                        <td><a href="#">Product 2</a></td>
                        <td>$80</td>
                        <td>&times;2</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="assets/img/products/3.jpg" alt=""></a>
                        </td>
                        <td><a href="#">Product 3</a></td>
                        <td>$100</td>
                        <td>&times;1</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-end">Total:</td>
                        <td>$325</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="text-end mt-3">
            <a href="#" class="btn btn-outline-warning">Cart</a>
            <a href="#" class="btn btn-outline-secondary">Checkout</a>
        </div>

    </div>
</div>
@endsection
