@extends('layout.master')
@section('container')
<div class="row">
	<div class="col-xs-12">
		<h2 class="text-center">
			<!-- نام هنرمند -->
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="media">
		  	<div class="media-left">
		    	<img src="/public/img/2.jpg" class="media-object" style="width:60px">
		  	</div>
		  	<div class="media-body">
		    	<h4 class="media-heading">فرید شهیدی</h4>
		    	<p>متولد تهران</p>
		    	<p>زادروز : 1369/10/23</p>
		    	<p>تکنیک</p>
		    	<p>وی در همان ابتدای کودکی در خانواده ای مذهبی چشم به جهان گشود. در انفقان جوانی مدرسه را رها کرد .</p>
		  	</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<h3 class="page-header">
			آثار این هنرمند
		</h3>
	</div>
</div>
<div class="row">
    @for($i = 0 ; $i < 7; $i++)
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
<div class="seperate"></div>
@endsection