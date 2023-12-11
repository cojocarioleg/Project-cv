<div class="col-lg-4 mb-3">

    <div class="cart-summary p-3 sidebar">
        <h5 class="section-title"><span>Cart Summary</span></h5>

        <div class="d-flex justify-content-between my-3">
            <h6>Subtotal</h6>
            <h6>${{$order->getFullPrice()}}</h6>
        </div>

        <div class="d-flex justify-content-between my-3 border-bottom">
            <h6>Shipping</h6>
            <h6>$10</h6>
        </div>

        <div class="input-group collapse" id="collapseCoupon">
            <input type="text" class="form-control" placeholder="Coupon Code">
            <button class="btn btn-warning">
                <i class="fa-regular fa-circle-check"></i>
            </button>
        </div>

        <div class="d-flex justify-content-between my-3">
            <h3>Total</h3>
            <h3>${{$order->getFullPrice() - 10}}</h3>
        </div>

        <div class="d-grid">
            <a href="{{route('checkout')}}" class="btn btn-warning">Checkout</a>
        </div>

    </div>

</div>
