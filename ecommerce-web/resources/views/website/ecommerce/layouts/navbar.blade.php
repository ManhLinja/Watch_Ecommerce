<nav>
    <ul>
        <li class="active2"><a href="/">Home</a></li>
        <li><a href="{{ route('website_products') }}">Products</a></li>
        <li><a href="{{ route('website_product_details',rand(1,20)) }}">Product details</a></li>
        <li><a href="{{ route('website_cart') }}">Cart</a></li>
        <li><a href="{{ route('website_wishlist') }}">Wishlist</a></li>
        <li><a href="{{ route('website_checkout') }}">Checkout</a></li>
        <li><a class="menu-contact" href="{{ route('website_contact') }}">contact us</a></li>
    </ul>
</nav>