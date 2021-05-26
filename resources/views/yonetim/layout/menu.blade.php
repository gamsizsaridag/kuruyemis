<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false"><img src="/admin/assets/images/users/1.jpg" alt="user-img"
                                                                   class="img-circle"><span class="hide-menu">{{Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Çıkış yap</a></li>
                    </ul>
                </li>
                <li><a href="{{route('yonetim.dashboard')}}"><i class="icon-home"></i><span
                            class="hide-menu"> ANA SAYFA</span></a></li>

                {{--                <li class="nav-small-cap">--- ÜRÜN YÖNETİMİ</li>--}}

                <li><a href="{{route('yonetim.product')}}"><i class="ti-layout-grid3-alt"></i><span class="hide-menu">Ürünler</span></a>
                </li>
                <li><a href="{{route('yonetim.category')}}"><i class="ti-view-list"></i><span class="hide-menu"> Kategoriler</span></a>
                </li>
                <li><a href="{{route('yonetim.brand')}}"><i class="ti-view-grid"></i><span
                            class="hide-menu"> Markalar</span></a></li>
                {{--                <li><a href="{{route('yonetim.message')}}"><i class="ti-layout-menu-separated"></i><span class="hide-menu"> Gelen Mesajlar</span></a></li>--}}
                <li><a href="{{route('yonetim.blog')}}"><i class="fas fa-align-left"></i><span class="hide-menu"> Bloglar</span></a>
                </li>
                <li><a href="{{route('yonetim.catalog')}}"><i class="ti-calendar"></i><span class="hide-menu"> Kataloglar</span></a>
                </li>
                <li><a href="{{route('yonetim.setting.edit')}}"><i class="ti-settings"></i><span class="hide-menu"> Genel Ayarlar</span></a>
                </li>
                <li><a href="{{route('yonetim.user')}}"><i class="fas fa-users"></i><span class="hide-menu"> Kullanıcılar</span></a>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
