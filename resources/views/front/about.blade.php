@extends('front.layout.app')
@section('content')
    <div class="header_spacing"></div>
    <section id="content">
        <div class="container">

            <div class="single_left">

                <div id="posts_cont">


                    <div class="blog_box ">
                        <div class="sb_title"><strong>{{$about->about_name}}</strong></div>
                        <div class="sb_price">
                            {!!$about->about_description!!}
                        </div>

                    </div><!--//blog_box-->



                    <div class="blog_box clear"></div>
                    <div class="clear"></div>

                </div><!--//posts_cont-->

                <!-- <div class="load_more_cont">
                     <div align="center"><div class="load_more_text">
                             <a href="https://dessign.net/shopper-woocommerce-theme/blog/page/2/" ><img src="https://dessign.net/shopper-woocommerce-theme/wp-content/themes/ShopperWooThemePremium3/images/loading-button.png" /></a>				</div></div>
                 </div>//load_more_cont-->


            </div><!--//single_left-->

            <div id="sidebar">

                <div class="side_box">
                    <h3 class="side_title"><b>Popüler Yazılar</b></h3>
                    <ul>
                        @php($index=0)
                        @foreach($son as $key)
                            @php($index++)
                            <li style="margin-top: 25px; margin-bottom: 10px;">
                                <a href="{{$key->url}}"><strong>{{$index}}) </strong>{{$key->name}}</a>
                            </li>
                            <hr>
                        @endforeach
                    </ul>

                </div>
            </div><!--//sidebar-->
            <div class="clear"></div>

        </div><!--//container-->
    </section><!--//content-->

@endsection

