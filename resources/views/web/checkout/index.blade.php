@extends('web.layouts.main')
@extends('web.layouts.head')
@extends('web.layouts.header')
@extends('web.layouts.nav')
@extends('web.layouts.cart')
@extends('web.layouts.footer')

@section('title')
    {{ 'Checkout'}}
@endsection

@section('content')


<main class="main">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>Checkout</span></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <form action="" class="needs-validation" novalidate>

            <div class="row">

                <div class="col-lg-8 mb-3">
                    <div class="Checkout p-3 h-100 bg-white">

                        <h1 class="section-title h5"><span>Billing address</span></h1>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="John Doe" aria-label="Name" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="doe@mail.com" aria-label="Email" required>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" name="phone" id="phone" class="form-control"
                                    placeholder="+123456789" aria-label="Phone" required>
                            </div>

                            <div class="col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <select id="country" name="country" class="form-select" aria-label="Country"
                                    required></select>
                            </div>

                            <div class="col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" id="city" class="form-control"
                                    placeholder="City name" aria-label="City" required>
                            </div>

                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control"
                                    placeholder="Street, house num, flat num" aria-label="Address" required>
                            </div>

                            <div class="col">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" name="comment" id="comment" rows="3"
                                    placeholder="Order note..."></textarea>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3">

                    <div class="cart-summary p-3 sidebar h-100">
                        <h5 class="section-title"><span>Order total</span></h5>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Product 1 Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            <small>($65) x 1</small>
                                        </td>
                                        <td class="text-end">$65</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Product 2 <small>($80) x 2</small>
                                        </td>
                                        <td class="text-end">$160</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Product 3 <small>($100) x 1</small>
                                        </td>
                                        <td class="text-end">$100</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" class="text-end">$325</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="form-check">
                            <input name="payment-method" class="form-check-input" type="radio"
                                name="payment-method1" id="payment-method1" value="payment-method1" required>
                            <label class="form-check-label" for="payment-method1">
                                Card payment
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="payment-method" class="form-check-input" type="radio"
                                name="payment-method2" id="payment-method2" value="payment-method2" required>
                            <label class="form-check-label" for="payment-method2">
                                Payment on delivery
                            </label>
                        </div>

                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-warning">Checkout</button>
                        </div>

                    </div>

                </div>

            </div>

        </form>

    </div>

</main>
@endsection
