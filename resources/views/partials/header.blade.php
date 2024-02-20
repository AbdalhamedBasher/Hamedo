<header class="main_menu {{ isset($breadcrumb) ? 'single_page_menu' : 'home_menu' }}">
    <div class="container">
        <div class="row " style="
    direction: ltr;
">

            <div class="col-lg-12" >
                <nav class="navbar navbar-expand-lg navbar-light" >

                    <a class="navbar-brand logo_2" href="{{ route('lines') }}"> <img src="{{ asset('img/logo.png') }}" alt="logo" style="
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

                           <li class="nav-item {{ (request()->is('evaluation/login')) ? ' active' : '' }} ml-10">
                                <a class="nav-link" href="{{ url('evaluation') }}">
                              <i class="fa fas fa-check"></i>
                                     التقييم</a>
                            </li>


                            <li class="nav-item {{ (request()->is('attendance/login')) ? ' active' : '' }} ml-10">
                                <a class="nav-link" href="{{ url('evaluation/attendance') }}">
                              <i class="fa fas fa-users"></i>
                                     الحضور</a>
                            </li>

                            <form id="logoutform" action="{{ route('lines') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <li class="nav-item">
                                <a href="#" class="nav-link"
                                   onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                                    <i class="nav-icon fa fa-sign-out"></i>
                                    تسجيل خروج
                                </a>
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
