@extends('front.layout.app')


@section('content')
    <div class="container woocommerce">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <nav class="woocommerce-breadcrumb"><a href="{{route('front.home')}}">Ana Sayfa</a>&nbsp;/&nbsp;
                    {{$category}}
                </nav>


                <div class="archive_header_left">
                    <h1 class="page-title">{{request('search')==null?'Kategori':'Ürün Adı'}} : {{$category}}</h1>
                    <div class="woocommerce-notices-wrapper"></div>
                    {{--                    <form class="woocommerce-ordering" method="get">--}}
                    {{--                        <select name="orderby" class="orderby" aria-label="Shop order">--}}
                    {{--                            <option value="menu_order" selected="selected">Default Sıralama</option>--}}
                    {{--                            <option value="popularity">Sort by popularity</option>--}}
                    {{--                            <option value="date">Sort by latest</option>--}}
                    {{--                            <option value="price">Sort by price: low to high</option>--}}
                    {{--                            <option value="price-desc">Sort by price: high to low</option>--}}
                    {{--                        </select>--}}
                    {{--                        <input type="hidden" name="paged" value="1">--}}
                    {{--                    </form>--}}
                </div>

                {{--                @if(request('search') == null)--}}
                <div style="float: right;" class="archive_header_right">

                    <div class="woocommerce-notices-wrapper"></div>

                    <form class="woocommerce-ordering" method="get">
                        @if(request('search'))
                            <input name="search" value="{{ request('search') }}" style="display: none">
                        @endif
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="önerilen" {{ request('orderby') == "önerilen" ? 'selected' : '' }}>
                                Önerilen
                            </option>
                            <option value="artanfiyat" {{ request('orderby') == "artanfiyat" ? 'selected' : '' }}>
                                Artan Fiyat
                            </option>
                            <option value="azalanfiyat" {{ request('orderby') == "azalanfiyat" ? 'selected' : '' }}>
                                Azalan Fiyat
                            </option>
                            <option value="enyeni" {{ request('orderby') == "enyeni" ? 'selected' : '' }}>En
                                Yeniler
                            </option>
                            <option value="adanzye" {{ request('orderby') == "adanzye" ? 'selected' : '' }}>A'dan
                                Z'ye
                            </option>
                            <option value="zdenaya" {{ request('orderby') == "zdenaya" ? 'selected' : '' }}>Z'den
                                A'ye
                            </option>
                        </select>
                        <input type="hidden" name="paged" value="1">
                    </form>

                </div>
                {{--                @endif--}}
                <div class="clear"></div>


                <ul class="products columns-4">


                    <div id="posts_cont">
                        @php($sayac=0)
                        @foreach($products as $key)
                            @php($sayac=$sayac+1)
                            @if($sayac<=3)
                                <div class="home_small_box {{$sayac==3?"home_small_box_last":""}} ">

                                    <a href="{{$key->url}}"
                                       class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    </a>
                                    <div>
                                        <a href="{{$key->url}}"
                                           class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        </a>
                                        <a href="{{$key->url}}">
                                            <img width="360" height="360"
                                                 src="{{$key->image}}"
                                                 class="attachment-home-small-box size-home-small-box wp-post-image"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="sb_title"><a
                                            href="{{$key->url}}">{{mb_strtoupper($key->name)}}</a></div>

                                    <div class="prod_meta">

                                        <div class="sb_price">
                                            @if($key->discountedPrice == null)
                                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol"></span>{{$key->price}}</span> TL</span>

                                            @else
                                                <span class="price"><del><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{$key->price}}</span> TL</del> <ins><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{$key->discountedPrice}}</span> TL</ins></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($sayac==3)
                                <div class="home_small_box clear"></div>
                                @php($sayac=0)
                            @endif
                        @endforeach
                    </div><!--//posts_cont-->

                    <span style="text-align: center">
                           {{$products->links()}}
                     </span>

                </ul>


                <div id="max_pages_id" style="display: none;">2</div>
                <div class="clear"></div>


            </main>
        </div>

        <div class="clear"></div>

    </div>

@endsection

