@extends('layout.master')
@section('fluid-container')
<div class="row">
	<div class="col-xs-12">
		<h2 class="text-center">
			هنرمندان
		</h2>
	</div>
</div>
<div class="seperate"></div>
<link rel="stylesheet" href="/public/css/effect-3dbox.css">
<div class="row">
	<div class="col-xs-12">
		<ul class="stage">
			@for($i = 1;$i < 8 ; $i++ )
			<li class="scene">
				<a href="/artist/1">
					<div class="movie" onclick="return true">
						<div class="poster">
						<h4 style="color: black;padding: 10px;text-align: center;">
							فرید شهیدی
						</h4>
						</div>
						<div class="info">
							<header>
								<h1>It's a Wonderful Life</h1>
								<span class="year">1946</span>
								<span class="rating">PG</span>
								<span class="duration">130 minutes</span>
							</header>
							<p>متولد تهران</p>
					    	<p>زادروز : 1369/10/23</p>
					    	<p>تکنیک</p>
					    	<p>وی در همان ابتدای کودکی در خانواده ای مذهبی چشم به جهان گشود. در انفقان جوانی مدرسه را رها کرد .</p>	
						</div>
					</div>
				</a>
			</li>
			@endfor
		</ul>
	</div>
</div>
@endsection