<div class="sidebar" style="background: #4f3b8aa3;;box-shadow: 10px 10px 10px 10px black;">
    <nav class="sidebar-nav">
        <ul class="nav">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i style="color:#e6e4eca3" class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                    اللوحة الرئيسية
                </a>
            </li>




            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i style="color:#e6e4eca3" class="fa fa-file-text-o nav-icon"></i>
                    النشاطات </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        {{-- this for if its active but it in nav-link  {{ request()->is('admin/courses') || request()->is('admin/courses') ? 'active' : '' }} --}}
                        <a href="{{route('lines')}}"
                            class="nav-link">
                            <i style="color:#e6e4eca3" class="fa fas fa-bookmark nav-icon"></i>
                           العرض
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('lines/create')}}"
                            class="nav-link">
                            <i style="color:#e6e4eca3" class="fa fas fa-plus nav-icon">

                            </i>
                             جديد
                        </a>
                    </li>

                </ul>


            </li>


            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i style="color:#e6e4eca3" class="fa fa-file-text-o nav-icon"></i>
                    الإعدادات </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        {{-- this for if its active but it in nav-link  {{ request()->is('admin/courses') || request()->is('admin/courses') ? 'active' : '' }} --}}
                        <a href="{{route('size')}}"
                            class="nav-link">
                            <i style="color:#e6e4eca3" class="fa fas fa-bookmark nav-icon"></i>
                           الاحجام
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('type')}}"
                            class="nav-link">
                            <i style="color:#e6e4eca3" class="fa fas fa-plus nav-icon">

                            </i>
                             النوع
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('brand')}}"
                            class="nav-link">
                            <i style="color:#e6e4eca3" class="fa fas fa-plus nav-icon">

                            </i>
                             الماركة
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('catogery')}}"
                            class="nav-link">
                            <i style="color:#e6e4eca3" class="fa fas fa-plus nav-icon">

                            </i>
                             التصنيف
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('item')}}"
                            class="nav-link">
                            <i style="color:#e6e4eca3" class="fa fas fa-plus nav-icon">

                            </i>
                             المواد
                        </a>
                    </li>

                </ul>


            </li>





        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
