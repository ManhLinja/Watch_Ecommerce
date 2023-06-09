@extends('website.ecommerce.layouts.ecommerce')
@section('content')

    <div class="cart-main-container shop-bg">
        <div class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-breadcrumb mtb-15">
                            <div class="menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="active">invoice</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="invoiceBody">
                        <invoice></invoice>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection