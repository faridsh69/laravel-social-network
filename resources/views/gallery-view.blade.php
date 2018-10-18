@extends('layout.master')
@section('fluid-container')
<div class="row" style="background: url('/public/img/galleries.jpg') fixed no-repeat;height: 400px;">
	<div class="col-xs-5">
        <div class="seperate"></div>
        <div class="seperate"></div>
        <div class="seperate"></div>
        <div class="card background-white">
            <h4>
                موزه هنرهای معاصر
            </h4>
            <div>
                آدرس :
                تهران، خیابان کارگر شمالی، جنب پارک لاله، موزه هنرهای معاصر
            </div>
            <div>
                شماره تلفن : ۸۸۹۸۹۳۷۴
            </div>
            <div>
                توضیحات :
                سایت این موزه  www.tmoca.com می باشد.
            </div>
            <div class="seperate"></div>
        </div>
	</div>
</div>
<div class="half-seperate"></div>
<div class="row">
    <div class="col-xs-12">
        <h3 class="text-right page-header">
            نمایشگاه درحال برگزاری
        </h3>
    </div>
</div>
<div class="row" style="background: rgba(1,1,45,1);">
    <div class="col-xs-12 text-center white-text">
        <h3>
            منتخب آثار موزه هنرهای معاصر تهران مسافران برلین رم
        </h3>
        <div class="white-text">
            <div class="seperate"></div>
            <div>
                <span class="glyphicon glyphicon-calendar"></span>
                ۳ بهمن ۱۳۹۵ لغایت ۳۰ بهمن ۱۳۹۵
            </div>  
            <div>
                <span class="glyphicon glyphicon-blackboard"></span>
                نقاشی - خطاطی
            </div>
        </div>
        <div class="half-seperate"></div>
         <a href="/exibition/1" class="btn btn-success">
            تور مجازی نمایشگاه
        </a>
        <div class="half-seperate"></div>
    </div>
    <img src="/public/img/3d/2.jpg" class="img-responsive">
</div>
<div class="row">
    <div class="col-xs-12">
        <h3 class="text-right page-header">
            نمایشگاه های اخیر
        </h3>
    </div>
</div>
<div class="seperate"></div>

<div class="row">
    @for($i = 0 ; $i < 3; $i++)
    <div class="col-xs-6 col-md-3">
        <div class="card">
            <img src="/public/img/gallery.jpg" class="img-responsive">
            <div class="seperate"></div>
            <div>
                <a href="/exibition/1" class="btn btn-info btn-block">
                    تور نمایشگاه
                </a>
            </div>
            <div class="half-seperate"></div>
            <h4>
                نمایشگاه هنرهای تجسمی فجر
            </h4>
            <div>
                <span class="glyphicon glyphicon-calendar"></span>
                ۳ بهمن ۱۳۹۵ لغایت ۳۰ بهمن ۱۳۹۵
            </div>
            <div>
                <span class="glyphicon glyphicon-blackboard"></span>
                نقاشی - خطاطی
            </div>
        </div>
        <div class="seperate"></div>
    </div>
    @endfor
</div>
<div class="seperate"></div>

<div class="seperate"></div>

@endsection