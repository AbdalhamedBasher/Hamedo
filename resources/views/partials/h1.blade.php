<header class="main_menu {{ isset($breadcrumb) ? 'single_page_menu' : 'home_menu' }}">
    <div class="container">
        <div class="row " style="
    direction: ltr;
">
            <div class="col-lg-12" >
                <nav class="navbar navbar-expand-lg navbar-light" >
                    <a class="navbar-brand logo_1" href="{{ route('home') }}"> <img src="{{ asset('img/logo.png') }}" alt="logo" style="
    width: 90px;
"> </a>
                    <a class="navbar-brand logo_2" href="{{ route('home') }}"> <img src="{{ asset('img/logo.png') }}" alt="logo" style="
    width: 90px;
"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-start"
                        id="navbarSupportedContent"  style="
    direction: rtl;
">
                        <ul class="navbar-nav align-items-center" >
                            <li class="nav-item {{ (request()->is('/')) ? ' active' : '' }} ml-10" >

                                <a class="nav-link " href="{{ route('home') }}">
                              <i class="fa fa-home "></i>
                                  الصفحة الرئيسية</i></a>
                            </li>
                            <li class="nav-item {{ (request()->is('courses_search')) ? ' active' : '' }} ml-10">
                                <a class="nav-link" href="{{ url('/courses_search') }}">
                                    <i class="fa fas fa-bookmark "></i>
                                  البحث عن بطاقة دورة</a>
                            </li>
                            <li class="nav-item {{ (request()->is('materials_search')) ? ' active' : '' }} ml-10">
                                <a class="nav-link" href="{{ url('materials_search') }}">
                              <i class="fa fas fa-book "></i>
                                  البحث عن بطافة مقرر</a>
                            </li>
{{--                            <li class="nav-item {{ (request()->is('admin/training_plans')) ? ' active' : '' }} ml-10">--}}
{{--                                <a class="nav-link" href="{{ url('admin/training_plans') }}">--}}
{{--                                    <i class="fa fas fa-newspaper-o "></i>--}}
{{--                                     النشرات  </a>--}}
{{--                            </li>--}}
                           <li class="nav-item {{ (request()->is('evaluation/login')) ? ' active' : '' }} ml-10">
                                <a class="nav-link" href="{{ url('evaluation') }}">
                              <i class="fa fas fa-check"></i>
                                     التقييم</a>
                            </li>
                            <li class="nav-item {{ (request()->is('admin')) ? ' active' : '' }} ml-10">
                                <a class="nav-link" href="{{ url('admin') }}">
                                  <i class="fa fas fa-cog "></i>
                                  ادارة النظام </a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div> </div> </div>

</header>
