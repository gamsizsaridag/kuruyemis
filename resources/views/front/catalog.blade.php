@extends('front.layout.app')
@section('content')

    <div class="header_spacing"></div>
    <section id="content">

        <div class="container">

            <div class="single_left">

                <div id="posts_cont">

                    @foreach($catalogs as $key)
                        <div class="blog_box ">
                            <div><a href="{{$key->file}}" target="_blank">
                                    <button class="catalog_hover"
                                            style="width: 100%; height: 100px; background-color: #1c7430;color: white; border-radius: 5px;">
                                        <h1>{{$key->name}}</h1><br> İncelemek için Tıkla
                                    </button>
                                </a></div>

                            {!!$key->description!!}
                        </div>

                </div><!--//blog_box-->
                @endforeach

                <span style="text-align: center">
                           {{$catalogs->links()}}
                     </span>


                <div class="blog_box clear"></div>
                <div class="clear"></div>

            </div><!--//posts_cont-->


        </div><!--//single_left-->

{{--        <div id="sidebar">--}}


{{--            <div class="side_box">--}}
{{--                <h3 class="side_title"><b>Popüler Yazılar</b></h3>--}}
{{--                <ul>--}}
{{--                    @php($index=0)--}}
{{--                    @foreach($son as $key)--}}
{{--                        @php($index++)--}}
{{--                        <li style="margin-top: 25px; margin-bottom: 10px;">--}}
{{--                            <a href="{{$key->url}}"><strong>{{$index}}) </strong>{{$key->name}}</a>--}}
{{--                        </li>--}}
{{--                        <hr>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}

{{--            </div>--}}
{{--        </div><!--//sidebar-->--}}
        <div class="clear"></div>

        </div><!--//container-->
    </section><!--//content-->

    <style>
        .catalog_hover:hover {
            background-color: #1e8739 !important;
        }
    </style>
@endsection

