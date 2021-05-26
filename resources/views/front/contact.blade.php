@extends('front.layout.app')
@section('content')
    @php($setting = \App\Models\Setting::find(1))
    <section id="content">
        <div class="container">
            <div id="posts_cont" style="text-align: center">
                <div class="sb_title"><h1>İletişim Bilgileri</h1></div>
                <div class="footer_widgets_cont container-fluid">
                    <div class="container footer_social">
                        <div class="footer_widget_col">
                            <div class="footer_box" style="margin-top: 20px">
                                <div
                                    style=" border:1px solid black; border-radius:5px; width: 100%; height: 160px; text-align: center">
                                    <img src="/images/icon/call.svg" width="50px" style="margin: 20px"><br>
                                    <strong
                                        style="font-family:sans-serif;font-weight: bold; ">{{$setting->gsm}}</strong>
                                </div>
                            </div>
                        </div> <!-- //footer_widget_col -->

                        <div class="footer_widget_col">
                            <div class="footer_box" style="margin-top: 20px">
                                <div
                                    style=" border:1px solid black; border-radius:5px; width: 100%; height: 160px; text-align: center">
                                    <img src="/images/icon/map.svg" width="50px" style="margin: 20px"><br>
                                    <strong
                                        style="font-family:sans-serif;font-weight: bold; ">{!! $setting->address!!}</strong>
                                </div>
                            </div>
                        </div> <!-- //footer_widget_col -->

                        <div class="footer_widget_col footer_widget_col_last">
                            <div class="footer_box" style="margin-top: 20px">
                                <div
                                    style=" border:1px solid black; border-radius:5px; width: 100%; height: 160px; text-align: center">
                                    <img src="/images/icon/email.svg" width="50px" style="margin: 20px"><br>
                                    <strong
                                        style="font-family:sans-serif;font-weight: bold; ">{{ $setting->email }}</strong>
                                </div>
                            </div>
                        </div> <!-- //footer_widget_col -->
                    </div><!--//posts_cont-->
                    <div class="clear"></div>
                    <div>

                       {!! $setting->map !!}

                    </div>
                </div><!--//container-->
    </section><!--//content-->
    <div class="clear"></div>
@endsection

