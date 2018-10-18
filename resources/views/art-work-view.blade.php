@extends('layout.master')
@section('fluid-container')

<div class="row">
    <div class="col-xs-12 text-center">
        <img src="/public/img/artt.jpg" class="img-responsive img-thumbnail">
    </div>
</div>
<div class="seperate"></div>
<div class="row text-center white-text" style="background: rgba(1,1,45,1);">
    <div class="col-xs-12">
        <h3>
            نام اثر: نقاشی مریم مقدس
        </h3>
    </div>
    <div class="col-sm-6">
        <div class="white-text">
            <div class="seperate"></div>
            <div>
                <span class="glyphicon glyphicon-calendar"></span>
                سال ساخت : 1390
            </div>
            <div>
                <span class="glyphicon glyphicon-blackboard"></span>
                دسته بندی :نقاشی
            </div>
            <div>
                سایز: 40 * 30
            </div>
            <div>
                تعداد نسخه
            </div>
            <div>
                فریم دارد 
            </div>
            <div>
                فروشی نیست 
            </div>
        </div>
        <div class="half-seperate"></div>
    </div>
    <div class="col-sm-6">
        <div class="white-text">
            <div class="seperate"></div>
            <div>
                امضا دارد
            </div>
            <div>
                وضعیت عمودی
            </div>
            <div>
                می توانید این نقاشی را از نزدیک ببینیدید.
            </div>
            <div>
                سیک
            </div>
            <div>
                متریال
            </div>
            <div>
                تکنیک
            </div>
        </div>
        <div class="half-seperate"></div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <h3 class="text-right page-header">
            سایر آثار این هنرمند
        </h3>
    </div>
</div>
<div class="seperate"></div>

<div class="row">
    @for($i = 0 ; $i < 3; $i++)
    <div class="col-xs-6 col-md-3">
        <a href="/art-work/1" style="color: black;text-decoration: none">
            <div class="card">
                <img src="/public/img/artt.jpg" class="img-responsive">
                <div class="half-seperate"></div>
                <h4>
                    نقاشی مریم مقدس
                </h4>
                <div>
                    <span class="glyphicon glyphicon-calendar"></span>
                    سال ساخت : 1390
                </div>
                <div>
                    <span class="glyphicon glyphicon-blackboard"></span>
                    دسته بندی :نقاشی ....
                </div>
            </div>
        </a>
        <div class="seperate"></div>
    </div>
    @endfor
</div>

@endsection