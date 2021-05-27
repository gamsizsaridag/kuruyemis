@php($setting = \App\Models\Setting::find(1))
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="\images\logo\guvenlogo1.jpg">
    <title>{{$setting->title}}</title>
    <meta name='robots' content='max-image-preview:large'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/dessign.net\/shopper-woocommerce-theme\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.2"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='https://dessign.net/shopper-woocommerce-theme/wp-includes/css/dist/block-library/style.min.css?ver=5.7.2'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='wc-block-style-css'
          href='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.5.11'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-layout-css'
          href='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.9.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
          href='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.9.1'
          type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' id='woocommerce-general-css'
          href='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.9.1'
          type='text/css' media='all'/>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='multi-color-sub-css'
          href='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/wp-multicolor-subscribe-widget/multicolor-subscribe-widget.css?ver=5.7.2'
          type='text/css' media='all'/>
    <script type='text/javascript'
            src='https://dessign.net/shopper-woocommerce-theme/wp-includes/js/jquery/jquery.min.js?ver=3.5.1'
            id='jquery-core-js'></script>
    <script type='text/javascript'
            src='https://dessign.net/shopper-woocommerce-theme/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
            id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="https://dessign.net/shopper-woocommerce-theme/wp-json/"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
          href="https://dessign.net/shopper-woocommerce-theme/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://dessign.net/shopper-woocommerce-theme/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.7.2"/>
    <meta name="generator" content="WooCommerce 3.9.1"/>
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <!-- WooCommerce Colors -->
    <style type="text/css">
        p.demo_store {
            background-color: #000;
            color: #808080;
        }

        .woocommerce small.note {
            color: #777;
        }

        .woocommerce .woocommerce-breadcrumb {
            color: #777;
        }

        .woocommerce .woocommerce-breadcrumb a {
            color: #777;
        }

        .woocommerce div.product span.price, .woocommerce div.product p.price {
            color: #000;
        }

        .woocommerce div.product .stock {
            color: #000;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li {
            border: 1px solid #d3ced3;
            background-color: #ebe9eb;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li a {
            color: #515151;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover {
            color: #6b6b6b;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
            background: #fff;
            border-bottom-color: #fff;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li.active:before {
            box-shadow: 2px 2px 0 #fff;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li.active:after {
            box-shadow: -2px 2px 0 #fff;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li:before, .woocommerce div.product .woocommerce-tabs ul.tabs li:after {
            border: 1px solid #d3ced3;
            position: absolute;
            bottom: -1px;
            width: 5px;
            height: 5px;
            content: " ";
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li:before {
            left: -6px;
            -webkit-border-bottom-right-radius: 4px;
            -moz-border-bottom-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-width: 0 1px 1px 0;
            box-shadow: 2px 2px 0 #ebe9eb;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li:after {
            right: -6px;
            -webkit-border-bottom-left-radius: 4px;
            -moz-border-bottom-left-radius: 4px;
            border-bottom-left-radius: 4px;
            border-width: 0 0 1px 1px;
            box-shadow: -2px 2px 0 #ebe9eb;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs:before {
            border-bottom: 1px solid #d3ced3;
        }

        .woocommerce span.onsale {
            background-color: #000;
            color: #999;
        }

        .woocommerce ul.products li.product .price {
            color: #000;
        }

        .woocommerce ul.products li.product .price .from {
            color: rgba(0, 0, 0, 0.5);
        }

        .woocommerce nav.woocommerce-pagination ul {
            border: 1px solid #d3ced3;
        }

        .woocommerce nav.woocommerce-pagination ul li {
            border-right: 1px solid #d3ced3;
        }

        .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus {
            background: #ebe9eb;
            color: #8a7e8a;
        }

        .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit {
            color: #515151;
            background-color: #ebe9eb;
        }

        .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover {
            background-color: #dad8da;
            color: #515151;
        }

        .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt {
            background-color: #000;
            color: #808080;
        }

        .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt:hover {
            background-color: #000;
            color: #808080;
        }

        .woocommerce a.button.alt.disabled, .woocommerce button.button.alt.disabled, .woocommerce input.button.alt.disabled, .woocommerce #respond input#submit.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce button.button.alt:disabled, .woocommerce input.button.alt:disabled, .woocommerce #respond input#submit.alt:disabled, .woocommerce a.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce a.button.alt.disabled:hover, .woocommerce button.button.alt.disabled:hover, .woocommerce input.button.alt.disabled:hover, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce button.button.alt:disabled:hover, .woocommerce input.button.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt:disabled[disabled]:hover, .woocommerce #respond input#submit.alt:disabled[disabled]:hover {
            background-color: #000;
            color: #808080;
        }

        .woocommerce a.button:disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce a.button.disabled:hover, .woocommerce button.button.disabled:hover, .woocommerce input.button.disabled:hover, .woocommerce #respond input#submit.disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit:disabled[disabled]:hover {
            background-color: #ebe9eb;
        }

        .woocommerce #reviews h2 small {
            color: #777;
        }

        .woocommerce #reviews h2 small a {
            color: #777;
        }

        .woocommerce #reviews #comments ol.commentlist li .meta {
            color: #777;
        }

        .woocommerce #reviews #comments ol.commentlist li img.avatar {
            background: #ebe9eb;
            border: 1px solid #e4e1e4;
        }

        .woocommerce #reviews #comments ol.commentlist li .comment-text {
            border: 1px solid #e4e1e4;
        }

        .woocommerce #reviews #comments ol.commentlist #respond {
            border: 1px solid #e4e1e4;
        }

        .woocommerce .star-rating:before {
            color: #d3ced3;
        }

        .woocommerce.widget_shopping_cart .total, .woocommerce .widget_shopping_cart .total {
            border-top: 3px double #ebe9eb;
        }

        .woocommerce form.login, .woocommerce form.checkout_coupon, .woocommerce form.register {
            border: 1px solid #d3ced3;
        }

        .woocommerce .order_details li {
            border-right: 1px dashed #d3ced3;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
            background-color: #000;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-range {
            background-color: #000;
        }

        .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {
            background-color: #000;
        }

        .woocommerce-cart table.cart td.actions .coupon .input-text {
            border: 1px solid #d3ced3;
        }

        .woocommerce-cart .cart-collaterals .cart_totals p small {
            color: #777;
        }

        .woocommerce-cart .cart-collaterals .cart_totals table small {
            color: #777;
        }

        .woocommerce-cart .cart-collaterals .cart_totals .discount td {
            color: #000;
        }

        .woocommerce-cart .cart-collaterals .cart_totals tr td, .woocommerce-cart .cart-collaterals .cart_totals tr th {
            border-top: 1px solid #ebe9eb;
        }

        .woocommerce-checkout .checkout .create-account small {
            color: #777;
        }

        .woocommerce-checkout #payment {
            background: #ebe9eb;
        }

        .woocommerce-checkout #payment ul.payment_methods {
            border-bottom: 1px solid #d3ced3;
        }

        .woocommerce-checkout #payment div.payment_box {
            background-color: #dfdcdf;
            color: #515151;
        }

        .woocommerce-checkout #payment div.payment_box input.input-text, .woocommerce-checkout #payment div.payment_box textarea {
            border-color: #c7c1c7;
            border-top-color: #bab4ba;
        }

        .woocommerce-checkout #payment div.payment_box ::-webkit-input-placeholder {
            color: #bab4ba;
        }

        .woocommerce-checkout #payment div.payment_box :-moz-placeholder {
            color: #bab4ba;
        }

        .woocommerce-checkout #payment div.payment_box :-ms-input-placeholder {
            color: #bab4ba;
        }

        .woocommerce-checkout #payment div.payment_box span.help {
            color: #777;
        }

        .woocommerce-checkout #payment div.payment_box:after {
            content: "";
            display: block;
            border: 8px solid #dfdcdf;
            border-right-color: transparent;
            border-left-color: transparent;
            border-top-color: transparent;
            position: absolute;
            top: -3px;
            left: 0;
            margin: -1em 0 0 2em;
        }
    </style>
    <!--/WooCommerce Colors-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/style.css"
          type="text/css" media="screen" title="no title" charset="utf-8"/>
    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/css/mobile.css"
          type="text/css" media="screen" title="no title" charset="utf-8"/>
    <link rel="stylesheet"
          href="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/css/slicknav.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script
        src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/js/jquery.infinitescroll.js"></script>
    <script type="text/javascript"
            src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/behaviors/manual-trigger.js"></script>
    <script
        src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/js/modernizr-custom-v2.7.1.min.js"
        type="text/javascript"></script>
    <script
        src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/js/jquery-finger-v0.1.0.min.js"
        type="text/javascript"></script>
    <script
        src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/js/flickerplate.min.js"
        type="text/javascript"></script>
    <link
        href="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/css/flickerplate.css"
        type="text/css" rel="stylesheet">
    <script
        src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/js/jquery.slicknav.js"></script>
    <style>
        .w-5 {
            display: none;
        }
    </style>


    <style type="text/css">
        body {


        }
    </style>
</head>
<body class="home blog theme-ShopperWooThemePremium3 woocommerce-no-js">

<header id="header" style="padding: 0px !important;">

    <div class="container">
        <div class="logo_cont">
            <a href="/"><img src="/images/logo/guvenlogo1.jpg" style="height:84px" alt="logo"/></a>

        </div><!--//logo_cont-->
        <div class="header_menu" style="margin-top: 25px !important; margin-left: 150px !important;">

            @include("front.layout.menu")
        </div><!--//header_menu-->
        <div class="header_search" style="margin-top: 25px !important;">
            <form role="search" method="get" id="searchform" action="{{route('front.search')}}">
                <input type="text" placeholder="Ürün Ara" value="{{request('search') }}" name="search" id="search"/>

                <input type="image"
                       src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/search-icon.png"/>
                <datalist id='list'></datalist>
            </form>
        </div><!--//header_search-->
        <div class="clear"></div>
    </div><!--//container-->
</header>


{{--<script> // arama da ekleme yapılan yerde ajax kullanımı--}}
{{--    $(document).ready(function () {--}}
{{--        $("#search").on('keyup', function () {--}}
{{--            var search = $("#search").val();--}}
{{--            $.ajax({--}}
{{--                url: "{{route('front.search.list')}}",--}}
{{--                dataType: 'JSON',--}}
{{--                type: "GET",--}}
{{--                data: {search: search},--}}
{{--                success: function (e) {--}}
{{--                    console.log(e.search.data);--}}
{{--                    var abc = '';--}}
{{--                    e.search.data.forEach(function (dt) {--}}
{{--                        abc += '<option>' + dt.name + '</option>';--}}
{{--                    });--}}
{{--                    $("#list").html(abc);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}


<div class="header_spacing"></div>

<section id="content">
    @yield('content')
</section><!--//content-->
<script type="text/javascript">
    $(document).ready(
        function ($) {
            $('.load_more_text a').click(function () {
                $(this).css('visibility', 'hidden');
                //alert('test');
            });
            var curPage = 1;
            var pagesNum = $("#max_pages_id").html();   // Number of pages
            if (pagesNum == 1)
                $('.load_more_text a').css('display', 'none');
            $('#posts_cont').infinitescroll({

                navSelector: "div.load_more_text",
                // selector for the paged navigation (it will be hidden)
                nextSelector: "div.load_more_text a:first",
                // selector for the NEXT link (to page 2)
                itemSelector: "#posts_cont .home_small_box",
                behavior: "twitter",
                maxPage: 0
                // selector for all items you'll retrieve
            }, function (arrayOfNewElems) {

                $('#posts_cont').append('<div class="clear"></div>');
                $('.load_more_text a').css('visibility', 'visible');
                curPage++;
//            alert(curPage + '**' + pagesNum);
                if (curPage == pagesNum) {
                    //$(window).unbind('.infscr');
                    $('.load_more_text a').css('display', 'none');
                } else {
                }

                //$('.home_post_cont img').hover_caption();

                // optional callback when new content is successfully loaded in.

                // keyword `this` will refer to the new DOM content that was just added.
                // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
                //                   all the new elements that were found are passed in as an array

            });
        }
    );
</script>


<style>
    .whatsapp_destek {
        position: fixed;
        bottom: 15px;
        left: 15px;
        padding: 10px;
        z-index: 9;
    }

    .whatsapp_destek a {
        color: #fff;
    }
</style>

@if($setting->whatsapp !=null)
    <div class="whatsapp_destek">
        <a href="https://api.whatsapp.com/send?phone={{$setting->whatsapp}}" target="_blank">
            <img src="/images/icon/whatsapp.svg" width="50%"> </a>
    </div>
@endif
<footer id="footer">

    <div class="footer_widgets_cont container-fluid">
        <div class="container footer_social">
            <hr>
            <div class="footer_widget_col">
                <div class="footer_box">
                    <div style="width: 100%; height: 100%; text-align: center">
                        <img src="/images/icon/cargo.svg" width="150px"><br>
                        <strong>150 TL VE ÜZERİ ÜCRETSİZ KARGO</strong>
                    </div>
                </div>
            </div> <!-- //footer_widget_col -->

            <div class="footer_widget_col">
                <div class="footer_box">
                    <div style="width: 100%; height: 100%; text-align: center">
                        <img src="/images/icon/secure.svg" width="150px" style="margin-top:10px; margin-left: 25px"><br>
                        <strong>GÜVENLİ ALIŞVERİŞ</strong>
                    </div>
                </div>
            </div> <!-- //footer_widget_col -->

            <div class="footer_widget_col footer_widget_col_last">
                <div class="footer_box">
                    <div style="width: 100%; height: 100%; text-align: center">
                        <img src="/images/icon/basket.svg" width="150px" style="margin-top:5px;"><br>
                        <strong>100% DOĞAL VE TAZE ÜRÜN</strong>
                    </div>
                </div>
            </div> <!-- //footer_widget_col -->

            <div class="clear"></div>
            <hr>
        </div> <!-- //container -->
    </div> <!-- //footer_widgets_cont -->
    <div class="footer_social">

        @if($setting->facebook != null)
            <a href="{{$setting->facebook}}" target="_blank"><img
                    src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/facebook-icon.png"
                    alt="facebook"/></a>
        @endif
        @if($setting->twitter != null)
            <a href="{{$setting->twitter}}" target="_blank"><img
                    src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/twitter-icon.png"
                    alt="twitter"/></a>
        @endif
        @if($setting->instagram != null)
            <a href="{{$setting->instagram}}" target="_blank"><img
                    src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/picasa-icon.png"
                    alt="social"/></a>
        @endif
        @if($setting->youtube != null)
            <a href="{{$setting->instagram}}" target="_blank"><img
                    src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/youtube-icon.png"
                    alt="youtube"/></a>
        @endif
        {{--        <a href="http://www.linkedin.com" target="_blank"><img--}}
        {{--                src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/linkedin-icon.png"--}}
        {{--                alt="linkedin"/></a>--}}

        {{--        <a href="https://plus.google.com/u/0/+MariosLublinski/posts" target="_blank"><img--}}
        {{--                src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/google-plus-icon.png"--}}
        {{--                alt="google plus"/></a>--}}

        {{--        <a href="http://www.pinterest.com" target="_blank"><img--}}
        {{--                src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/pinterest-icon.png"--}}
        {{--                alt="pinterest"/></a>--}}

        {{--        <a href="http://www.vimeo.com" target="_blank"><img--}}
        {{--                src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/vimeo-icon.png"--}}
        {{--                alt="vimeo"/></a>--}}


        <div class="clear"></div>
    </div><!--//footer_social-->
    © 2021 Güven Kuruyemiş</div>
</footer><!--//footer-->
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type='text/javascript'
        src='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'
        id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/shopper-woocommerce-theme\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/shopper-woocommerce-theme\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/dessign.net\/shopper-woocommerce-theme\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.9.1'
        id='wc-add-to-cart-js'></script>
<script type='text/javascript'
        src='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'
        id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/shopper-woocommerce-theme\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/shopper-woocommerce-theme\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.9.1'
        id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/shopper-woocommerce-theme\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/shopper-woocommerce-theme\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_a1587a6984450cd3d6452cfca3c6c47f",
        "fragment_name": "wc_fragments_a1587a6984450cd3d6452cfca3c6c47f",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://dessign.net/shopper-woocommerce-theme/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.9.1'
        id='wc-cart-fragments-js'></script>
<script type='text/javascript'
        src='https://dessign.net/shopper-woocommerce-theme/wp-includes/js/wp-embed.min.js?ver=5.7.2'
        id='wp-embed-js'></script>
<script
    src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/js/scripts.js"></script>
</body>

<style>
    .home_small_box {
        width: 257px !important;
    }
    @media only screen and (max-width: 1200px){
        .home_small_box {
            width: 224px !important;
        }
    }
    @media only screen and (max-width: 1200px)
    {
        @media only screen and (min-width: 768px) and (max-width: 959px)
        {
            .home_small_box {
                width: 176px !important;
            }
        }
    }
</style>


</html>
