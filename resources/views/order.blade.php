@extends('layout.master')
@section('container')
<div class="row">
	<div class="col-xs-12">
		<h1>
			سفارش اثر هنری
		</h1>
	</div>
	<div class="col-xs-12">
		<form class="form" method="POST">
			{{ csrf_field() }}
				نوع اثر خود را مشخص کنید.
				<input type="radio" name="1" checked="true">
				پرتره
				<input type="radio" name="1">
				حجم
				<input type="radio" name="1">
				کاریکاتور
				<input type="radio" name="1">
				نقاشی
				<input type="radio" name="1">
				خطاطی
				<input type="radio" name="1">
				عکاسی
			<br>
			<br>
		  	<div class="form-group">
		    	<label for="title">عنوان:</label>
		   	 	<input type="text" class="form-control input-sm" id="title" name="title" value="{{ old('title') }}">
		  	</div>
		  	<div class="form-group">
		    	<label for="address">توضیحات: </label>
		    	<input type="text" class="form-control input-sm" id="address" name="address" value="{{ old('address') }}">
		  	</div>
		  	<div class="form-group">
		    	<label for="description">محدوده قیمتی: </label>
		    	<input type="text" class="form-control input-sm" id="description" name="description" value="{{ old('description') }}">
		  	</div>
		  	<div class="form-group">
		    	<label for="phone">تلفن: </label>
		    	<input type="text" class="form-control input-sm" id="phone" name="phone" value="{{ old('phone') }}">
		  	</div>
		  	<div class="form-group">
		    	<label for="manager">ایمیل: </label>
		    	<input type="text" class="form-control input-sm" id="manager" name="manager" value="{{ old('manager') }}">
		  	</div>
		  	آپلود فایل
		  	<button type="submit" class="btn btn-default input-sm">ثبت سفارش هنری</button>
		</form>
	</div>
	<div class="col-xs-12">
		نمونه کارهای انجام شده
		<table class="table">
		<thead>
		<tr>
			<th>
				عنوان
			</th>
			<th>
				توضیحات
			</th>
			<th>
				محدوده قیمتی
			</th>
			<th>
				قیمت کار انجام شده
			</th>
			<th>
				نتیجه کار
			</th>
		</tr>
		</thead>
		<tbody>
		@for($i = 0 ; $i < 2 ; $i++)
		<tr>
			<td>
				پرتره
			</td>
			<td>
				کاریکاتور
			</td>
			<td>
				 زیر 200 هزارتومان
			</td>
			<td>
				 100 هزارتومان
			</td>
			<td>
				<img src="/public/img/request-art.png" class="img-responsive">
			</td>
		</tr>
		@endfor
		</tbody>
		</table>
	</div>
</div>
@endsection