<div class="background-header">
    <div class="container">
        <div class="half-seperate"></div>
        <div class="row">
            <div class="col-xs-2 col-sm-2">
                <img src="/public/img/logo.png" alt="logo" class="logo-icon">
                آرتیماژ
            </div>
            <div class="col-xs-3">
               <!--  <div class="half-seperate"></div>
                <span class="glyphicon glyphicon-globe"></span>
                <a class="{{ Lang::locale() == 'en' ? 'selected':'' }}" href="/language/en">English</a>
                <span> / </span> 
                <a class="{{ Lang::locale() == 'fa' ? 'selected':'' }}" href="/language/fa">فارسی</a> -->
            </div>
            <div class="col-xs-6 col-sm-4 col-sm-offset-3 col-md-3 col-md-offset-4 col-lg-2 col-lg-offset-5">
            @if(empty(Auth::id()))
                <a href="/user/register" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> ثبت نام</a>
                <a href="/user/login" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span> ورود</a> 
            @else
                <a href="/admin/user/profile" class="btn">
                <span class="glyphicon glyphicon-th-list"></span>
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </a>
            @endif
            </div>
        </div>
        <div class="half-seperate"></div>
    </div>
</div>
<nav class="navbar background-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>                           
            </button>
            <a class="navbar-brand {{Request::segment(1) == ''? 'selected':''}}" href="/">
            شبکه اجتماعی هنرمندان</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                          
                <li><a href="/exibition/1" class="{{ Request::segment(1) == 'exibition' ? 'selected':'' }}">تور مجازی نمایشگاه ها</a></li>
                <li><a href="/gallery" class="{{ Request::segment(1) == 'gallery' ? 'selected':'' }}">گالری ها</a></li>
                <li><a href="/artist" class="{{ Request::segment(1) == 'artist' ? 'selected':'' }}">هنرمندان</a></li>
                <li><a href="/order" class="{{ Request::segment(1) == 'order' ? 'selected':'' }}">سفارش اثر هنری</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">هنرکده <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">نقاش</a></li>
                        <li><a href="#">هنر حجم </a></li>
                        <li><a href="#">عکاسی </a></li>
                        <li><a href="#">خوش نویسی</a></li>
                        <li><a href="#">هنرهای سنتی</a></li>
                    </ul>
                </li>
                <!-- <li><a href="/">سفارش اثر هنری</a></li> -->
                <!-- <li><a href="/">حراج</a></li> -->
                <!-- <li><a href="/">فروشگاه متریال</a></li> -->
                <!-- <li><a href="/">مسابقه هفته</a></li> -->
                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#about-us-modal">درباره ما</a></li>
                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#contact-us-modal">تماس با ما</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="about-us-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">درباره ما</h4>
            </div>
            <div class="modal-body">
                <p>
                    درباره ما
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contact-us-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">تماس با ما</h4>
            </div>
            <div class="modal-body">
                <h5>
                    تلفن:
                </h5>
                <p>
                    <!-- 09106801685 -->
                    
                </p>
                <!-- <h5>
                    فکس:
                </h5>
                <p>

                    -
                    ۰۲۱
                </p> -->
                <h5>
                    پست الکترونیک:
                </h5>
                <p>
                farid.sh69@gmail.com
                </p>
                <h5>
                    آدرس:
                </h5>
                <p>
                    تهران،
                </p>
            </div>
        </div>
    </div>
</div>