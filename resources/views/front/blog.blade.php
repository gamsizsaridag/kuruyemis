@extends('front.layout.app')
@section('content')

    <div class="header_spacing"></div>
    <section id="content">
        <div class="container">

            <div class="single_left">

                <div id="posts_cont">

                    @foreach($blogs as $key)
                        <div class="blog_box ">
                            <div><a href="{{$key->url}}"><img width="930" height="400"
                                                              src="{{$key->image}}"
                                                              class="attachment-st-blog-image size-st-blog-image wp-post-image"
                                                              alt="" loading="lazy"/></a></div>
                            <div class="sb_title"><a
                                    href="{{$key->url}}">{{$key->name}}</a></div>
                            <div class="sb_price">

                                {!!substr($key->description,0,300)!!}...
                            </div>
                            <p>
                                <a href="{{$key->url}}"
                                   class="read_more">DEVAMINI OKU...</a></p>
                        </div><!--//blog_box-->
                    @endforeach

                     <span style="text-align: center">
                           {{$blogs->links()}}
                     </span>


                    <div class="blog_box clear"></div>
                    <div class="clear"></div>

                </div><!--//posts_cont-->


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
