@extends('layout.master')
@section('fluid-container')
<div class="row">
	<div class="col-md-2">
		<h3 class="text-center">
			نمایشگاه هنرهای تجسمی فجر
		</h3>
		<div>
            <span class="glyphicon glyphicon-calendar"></span>
            ۳ بهمن ۱۳۹۵ لغایت ۳۰ بهمن ۱۳۹۵
        </div>
        <div>
            <span class="glyphicon glyphicon-blackboard"></span>
            نقاشی - خطاطی
        </div>
        <h4 class=" page-header">
        	آثار این نمایشگاه
        </h4>
		<ul class="list-unstyled">
		@for( $i = 1 ; $i < 4 ; $i ++ )
			<li>
			<p>
				{{$i}} - نقاشی مریم مقدس
			</p>
			<p>
				خالق اثر : <a href="/artist/1"> فرید شهیدی</a>
			</p>
			<a href="/art-work/1">مشاهده جزییات بیشتر</a>
			</li>
			<div class="seperate"></div>
		@endfor
		</ul>
	</div>
	<div class="col-md-10">
	 	<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1488584381329!6m8!1m7!1s0nwWBOa5tZQAAAQ3ltvgQw!2m2!1d34.87246853331038!2d-111.7575264226959!3f18.635510470889557!4f-14.302036123185289!5f0.7820865974627469" allowfullscreen style="width:100%;border: 0px;height: 520px"></iframe>
	</div>
</div>
@endsection