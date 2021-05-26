<!--<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Shop</a>
        <ul>
            <li><a href="#">Jeans</a></li>
            <li><a href="#">Shorts</a></li>
            <li><a href="#">Dresses</a></li>
        </ul>
    </li>
    <li><a href="#">Cart</a></li>
    <li><a href="#">My Account</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact</a></li>
</ul> -->
@php($category=\App\Models\Category::where('status','1')->orderBy('must','asc')->get())
@php($about=\App\Models\Setting::where('id','1')->where('about_status','1')->first())
@php($catalog=\App\Models\Catalog::where('status','1')->first())

<ul id="header_menu_id" class="menu" style="align-content: center">
    <li id="menu-item-14"
        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-14">
        <a href="{{route('front.home')}}" aria-current="page">Ana Sayfa</a></li>
    <li id="menu-item-23"
        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-23"><a href="#">Kategoriler</a>
        <ul class="sub-menu">
            @foreach($category as $key)
                <li id="menu-item-25"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-25"><a
                        href="{{$key->url}}">{{strtoupper($key->name)}}</a></li>
                {{--            <li id="menu-item-24" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-24"><a href="https://dessign.net/shopper-woocommerce-theme/product-category/accessories/">Accessories</a></li>--}}
                {{--            <li id="menu-item-27" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-27"><a href="https://dessign.net/shopper-woocommerce-theme/product-category/new-arrivals/">New Arrivals</a></li>--}}
                {{--            <li id="menu-item-26" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-26"><a href="https://dessign.net/shopper-woocommerce-theme/product-category/clearance/">Clearance</a></li>--}}
            @endforeach
        </ul>
    </li>
    @if($catalog)
        <li id="menu-item-14"
            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-14">
            <a href="{{route('front.catalog')}}" aria-current="page">Katalog</a></li>
    @endif
    {{--    <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-20"><a href="https://dessign.net/shopper-woocommerce-theme/my-account/">My Account</a>--}}
    {{--        <ul class="sub-menu">--}}
    {{--            <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="https://dessign.net/shopper-woocommerce-theme/checkout/">Checkout</a></li>--}}
    {{--            <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60"><a href="https://dessign.net/shopper-woocommerce-theme/cart/">Cart</a></li>--}}
    {{--            <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61"><a href="https://dessign.net/shopper-woocommerce-theme/my-account/">My Account</a></li>--}}
    {{--        </ul>--}}
    {{--    </li>--}}
    {{--    <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="https://dessign.net/shopper-woocommerce-theme/cart/">Cart</a></li>--}}
    <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a
            href="{{route('front.blog')}}">Blog</a></li>
    @if($about)
        <li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a
                href="{{route('front.about')}}">Hakkımızda</a></li>
    @endif
    <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a
            href="{{route('front.contact')}}">İletişim</a></li>
</ul>
<div class="clear"></div>

