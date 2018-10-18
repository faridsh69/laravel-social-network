@extends('layout.master')
@section('fluid-container')
<link rel="stylesheet" href="/public/css/hover-effects.css">
<div class="grid">
    @for($i = 1; $i < 7  ; $i ++)
    <figure class="effect-apollo">
        <img src="/public/img/showroom.jpg" alt="img18"/>
        <figcaption>
            <h2 style="color: white">موزه <span>هنرهای معاصر</span></h2>
            <p>منتخب آثار موزه هنرهای معاصر تهران 
            17 اسفند 1395 لغایت 26 خرداد 1396 - ساعت 9 الی 18</p>
            <a href="/gallery/1">View more</a>
        </figcaption>           
    </figure>
    @endfor
</div>
<!-- <div class="row">
	<div class="col-xs-12">
		<h2 class="text-center">
			
		</h2>
	</div>
</div>
<div class="row">
   
</div> -->
<div class="seperate"></div>
@endsection