@extends('layout.master')
@section('fluid-container')
<div class="row">
    <div class="col-xs-12"  style="background: rgba(192,221,235,1);">
    <button class="btn btn-success">ok</button>
    <button class="btn btn-warning">ok</button>
    <button class="btn btn-error">ok</button>
    <button class="btn btn-info">ok</button>
    <button class="btn btn-primary">ok</button>
    <h1 class="text-center">
        خدمات شبکه اجتماعی هنری
    </h1>
        <h3>
            <span class="glyphicon glyphicon-ok"></span>
            کسب درآمد از طریق انجام پروژه های هنری
            <small>
                انجام کارهای سفارشی علاقه مندان به هنر
                <a href="/order" class="btn btn-warning">مراجعه به صفحه</a>
            </small>
        </h3>
        <h3>
            <span class="glyphicon glyphicon-ok"></span>
            تور مجازی نماشگاه ها
            <small>
                تمام نمایشگاه ها چه گذشته ها چه در حال برگزاری ها
                <a href="/exibition/1" class="btn btn-warning">مراجعه به صفحه</a>
            </small>
        </h3>
        <h3>
            <span class="glyphicon glyphicon-ok"></span>
            به فروش گذاشتن آثار هنرمندان بدون دریافت دستمزد
            <small>
                با آپلود اثر هنری خود می توانید آن را برای فروش قرار دهید
            </small>
            <a href="/art-work/1" class="btn btn-warning">مراجعه به صفحه</a>
        </h3>
        <h3>
            <span class="glyphicon glyphicon-ok"></span>
            آموزش هنر از طریق مطالعه نقد اساتید برجسته هنری
            <small>
                هر اثر هنری پس از آپلود برای اساتید برجسته ارسال می شود و آن ها نقد خود را مینویسند
            </small>
            <a href="/order" class="btn btn-warning">مراجعه به صفحه</a>
        </h3>
         <h3>
            <span class="glyphicon glyphicon-ok"></span>
            مرجع اطلاعات تمام نمایشگاه ها و گالری ها و هنرمندان کشور
            <small>
            </small>
            <a href="/order" class="btn btn-warning">مراجعه به صفحه</a>
        </h3>
        <!-- <h3>
            <span class="glyphicon glyphicon-ok"></span>
            حمایت از تمام هنرمندان کشور
            <small>
                ....
            </small>
        </h3> -->
        <h3>
            <span class="glyphicon glyphicon-ok"></span>
            مرجع کامل تمام اطلاعات هنری
        </h3>
        <h3>
            <span class="glyphicon glyphicon-ok"></span>
            نمایش درخور آثار هنری هنرمندان
        </h3>
        <h3>
            <span class="glyphicon glyphicon-ok"></span>
            معرفی هنرمندان ناشناخته کشور
        </h3>
                <!-- <h3>
                    <span class="glyphicon glyphicon-ok"></span>
                    خرید متریال با کیفیت هنری
                </h3>
                <h3>
                    <span class="glyphicon glyphicon-ok"></span>
                    مدیریت کلاس های خود 
                </h3>
                <h3>
                    <span class="glyphicon glyphicon-ok"></span>
                    برگزاری اسکار هنری و مسابقات با جوایز
                </h3> -->
        
    </div>
</div>
<div class="double-seperate"></div>
<div class="double-seperate"></div>
<div class="row text-center">
    <div class="col-xs-3">
        <div class="seperate"></div>
        <div class="seperate"></div>
        <img src="/public/img/haraj.jpg" class="img-responsive">
        <h4>
            حراج با قوانین استاندارد
        </h4>
        <p>
           ما در این سایت حراجی داریم که خیلی مناسبه 
        </p>
    </div>
    <div class="col-xs-3">
        <img src="/public/img/request-art.png" class="img-responsive" height="100px">
        <h4>
            سفارش آنلاین اثر هنری
        </h4>
        <p>
           مجسمه و کاریکاتور و نقاشی و ... 
        </p>
    </div>
    <div class="col-xs-3">
    <div class="seperate"></div>
    <div class="seperate"></div>
    <div class="seperate"></div>
        <img src="/public/img/exibition.jpeg" class="img-responsive">
        <h4>
            تور مجازی نمایشگاه ها
        </h4>
        <p>
           ما در این سایت حراجی داریم که خیلی مناسبه 
        </p>
    </div>
    <div class="col-xs-3">
    <div class="seperate"></div>
    <div class="seperate"></div>
    <div class="seperate"></div>
        <img src="/public/img/student.jpg" class="img-responsive">
        <h4>
            حمایت از دانشجویان هنر
        </h4>
        <p>
           ما در این سایت حراجی داریم که خیلی مناسبه 
        </p>
    </div>
</div>
<div class="seperate"></div>
<div class="seperate"></div>
<div class="seperate"></div>
<!-- <div class="row">
    <div class="col-xs-12">
        <h3>
            گالری های برتر
        </h3>
    </div>
</div> -->
<!-- <div class="row">
    @for($i = 0 ; $i < 4; $i++)
    <div class="col-xs-6 col-md-3">
        <div class="card">
            <img src="/public/img/gallery.jpg" class="img-responsive">
           
            <div class="half-seperate"></div>
            <div>
                عنوان :
                گالری ملت 
            </div>
            <div>
                آدرس :
                گالری ملت 
            </div>
            <div>
                شماره تلفن :
                گالری ملت 
            </div>
        </div>
        <div class="seperate"></div>
    </div>
    @endfor
</div> -->

<!-- <div class="row">
    <div class="col-xs-12">
        <h3>
            نمایشگاه های تهران
        </h3>
    </div>
</div>
<div class="row">
    @for($i = 0 ; $i < 3; $i++)
    <div class="col-xs-4">
        <div class="card">
            <img src="/public/img/exibition.jpg" class="img-responsive">
            <div class="seperate"></div>
            <div>
                <a href="/tor" class="btn btn-info btn-block">
                    تور مجازی
                </a>
            </div>
            <div class="half-seperate"></div>
            <div>
                عنوان :
                نمایشگاه آثار نقاشی 
            </div>
            <div>
                گالری :
                گالری ملت 
            </div>
            <div>
                تاریخ :
                12/10/95 
            </div>
        </div>
        <div class="seperate"></div>
    </div>
    @endfor
</div> -->


<div class="row">
    <div class="col-xs-12">
        <h3>
            آثار فروخته شده اخیر
        </h3>
    </div>
</div>
<div class="row">
    @for($i = 0 ; $i < 3; $i++)
    <div class="col-xs-4">
        <div class="card">
            <img src="/public/img/art-work.jpg" class="img-responsive">
            <div class="seperate"></div>
            <div>
                <a href="/tor" class="btn btn-info btn-block">
                    تور مجازی
                </a>
            </div>
            <div class="half-seperate"></div>
            <div>
                عنوان :
                نمایشگاه آثار نقاشی 
            </div>
            <div>
                دسته بندی :
                نقاشی 
            </div>
            <div>
                تکنک :
                رنگ روغن 
            </div>
             <div>
                ابعاد :
                100 * 70 
            </div>
        </div>
        <div class="seperate"></div>
    </div>
    @endfor
</div>

<!-- <div class="row">
    <div class="col-xs-12">
        <h3>
            هنرمندان از گذشته تا امروز
        </h3>
    </div>
</div>
<div class="row">
    @for($i = 0 ; $i < 6; $i++)
    <div class="col-xs-2">
        <div class="card">
            <img src="/public/img/artist.jpg" class="img-responsive">
            <div class="seperate"></div>
            <div>
                <a href="/tor" class="btn btn-info btn-block">
                    تور مجازی
                </a>
            </div>
            <div class="half-seperate"></div>
            <div>
                عنوان :
                نمایشگاه آثار نقاشی 
            </div>
            <div>
                دسته بندی :
                نقاشی 
            </div>
            <div>
                تکنک :
                رنگ روغن 
            </div>
             <div>
                ابعاد :
                100 * 70 
            </div>
        </div>
        <div class="seperate"></div>
    </div>
    @endfor
</div>
 -->

@endsection