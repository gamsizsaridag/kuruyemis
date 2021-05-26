@extends('front.layout.app')


@section('content')
    <div class="container woocommerce">

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
                                     class="attachment-home-small-box size-home-small-box wp-post-image" alt="">
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
                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><span
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


        <div id="max_pages_id" style="display: none;">1</div>


        <div class="clear"></div>

    </div>

@endsection
