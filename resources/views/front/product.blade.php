@extends('front.layout.app')
@section('content')

    <div class="container woocommerce">


        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="woocommerce-notices-wrapper"></div>
                <div id="product-83"
                     class="product type-product post-83 status-publish first instock product_cat-accessories product_cat-all-product product_cat-clearance has-post-thumbnail sale virtual purchasable product-type-simple">


                    <div class="images">
                        <div class="product_meta" style="margin-top: 15px">


                            <span class="sku_wrapper"><span class="sku"></span>
                                    <a href="{{$product->category->url}}"
                                       rel="tag">{{$product->category->name}}</a>
                                > <a href="{{$product->url}}"
                                     rel="tag">{{$product->name}}</a>
                            </span>


                        </div>
                        <img src="{{$product->image}}" style="width: 1000px">

                    </div>

                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">{{$product->name}}</h1>
                        <div style="margin-top: 25px; margin-bottom: 25px">
                            @if($product->discountedPrice == null)

                                <p class="price">
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol"></span>{{$product->price}}</span>
                                        TL
                                    </ins>
                                </p>
                            @else
                                <p class="price">
                                    <del><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol"></span>{{$product->price}}</span>
                                        TL
                                    </del>
                                    <ins><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol"></span>{{$product->discountedPrice}}</span>
                                        TL
                                    </ins>
                                </p>
                            @endif
                        </div>

                        <div class="woocommerce-product-details__short-description">
                            {!! $product->description !!}
                        </div>
                        @php($setting=\App\Models\Setting::find(1))
                        @if($setting->whatsapp !=null)
                            <a href="https://api.whatsapp.com/send?phone={{$setting->whatsapp}}" target="_blank">
                                <button type="submit"
                                    style="padding: 15px; border-radius: 15px; background-color: #0d4982; color: white;"
                                class="product_hover">
                                    Whatsapp'tan Sipariş Ver
                                    <img src="/images/icon/whatsapp.svg" width="15px" style="margin-left: 10px">
                                </button>
                            </a>
                        @endif

                    </div>


                </div>


            </main>
        </div>

    </div>


    <div class="clear"></div>
    ﻿
    <style>
        .product_hover:hover {
            background-color: #0b66bd !important;
        }
    </style>


@endsection
