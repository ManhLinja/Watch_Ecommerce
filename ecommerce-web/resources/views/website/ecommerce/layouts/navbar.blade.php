<nav>
    <ul>
        <li class="active2"><a href="/">Trang chủ</a></li>
        <li class="active2"><a href="{{ route('website_products') }}">Sản phẩm</a></li>
        {{-- <li class="active2"><a href="{{ route('website_product_details',rand(1,20)) }}">Product details</a></li> --}}
        <li class="active2"><a href="{{ route('website_cart') }}">Giỏ hàng</a></li>
        {{-- <li class="active2"><a href="{{ route('website_wishlist') }}">Wishlist</a></li> --}}
        <li class="active2"><a href="{{ route('website_checkout') }}">Thanh toán</a></li>
        <li class="active2"><a class="menu-contact" href="{{ route('website_contact') }}">Liên hệ</a></li>
    </ul>
</nav>