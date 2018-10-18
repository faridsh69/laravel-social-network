@extends('admin.dashboard')
@section('breadcrumb')
	<ol class="breadcrumb">
		<li>داشبورد</li>
		<li class="active">پروفایل کاربری</li>
	</ol>
@stop
@section('content')
	<div class="row">
		<div class="col-xs-12">
		@if ($errors->all())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
	        <div class="panel panel-default">
			<div class="panel-heading">
				اعتبارسنجی شماره همراه
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						<p>
							جهت تأیید صحت و اعتبار شماره همراه وارد شده لطفا کد فعال‌سازی ارسال شده به شماره همراه
							{{ \Auth::user()->email}}
							را در زیر وارد نمایید.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-1">
						<label>کد تأیید:</label>
					</div>
					<div class="col-sm-11">
						<div class="row">
							<form method="post" action="/admin/user/phone-verification-code">
								<div class="col-xs-6">
									<input id="verification-code" type="text" name="verification_code" class="form-control ltr" required/>
									<div class="help-block">کد دریافتی در شماره همراه ذکر شده را اینجا وارد نمایید.</div>
								</div>
								<div class="col-xs-6 col-md-2">
									<button type="submit" class="btn btn-success btn-block">ثبت</button>
								</div>
								<div class="col-xs-12 col-md-4">
									<a href="/admin/user/send-phone-verification-code" class="btn btn-block btn-primary">ارسال پیامک حاوی کد فعال‌سازی</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<div class="row">
		<div class="col-xs-12">
			<form enctype="multipart/form-data" action="/admin/user/profile" method="POST">
				{{ csrf_field() }}
				<div class="panel panel-default">
					<div class="panel-heading">
						پروفایل کاربر 
					</div>
					<div class="panel-body">
						<button type="submit" class="btn btn-success btn-block"> ذخیره تغییرات </button>
						<div class="seperate"></div>
						@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	                        @if(Session::has('alert-' . $msg))
	                            <div class="alert alert-{{ $msg }} alert-dismissible" role="alert">
	                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                                    <span aria-hidden="true">&times;</span>
	                                </button>
	                                <ul class="list-unstyled">
	                                    <li>{{ Session::get('alert-' . $msg) }}</li>
	                                </ul>
	                            </div>
	                        @endif
	                    @endforeach
	                    <div class="table-responsive">
						<table class="table table-striped">
							<tr>
								<td width="150">نام</td>
								<td><input type="text" name="first_name" class="form-control" value="{{ \Auth::user()->first_name }}"></td>
							</tr>
							<tr>
								<td>نام خانوادگی</td>
								<td><input type="text" name="last_name" class="form-control" value="{{ \Auth::user()->last_name }}
								"></td>
							</tr>
							<tr>
								<td>نام کاربری</td>
								<td><input type="text" name="username" class="form-control" value="{{ \Auth::user()->username }}"></td>
							</tr>
							<tr>
								<td>ایمیل</td>
								<td><input type="text" name="email" class="form-control" value="{{ \Auth::user()->email }}"></td>
							</tr>
							<tr>
								<td>تلفن همراه</td>
								<td><input type="text" name="cellphone" class="form-control" value="{{ \Auth::user()->cellphone }}"></td>
							</tr>
							<tr>
								<td>زمان ثبت‌نام به لاتین </td>
								<td>
								{{ date('Y/m/d', strtotime(\Auth::user()->created_at)) }}
								</td>
							</tr>
							<tr>
								<td>زمان ثبت‌نام به شمسی</td>
								<td>
								{{ \Nopaad\jDate::forge( \Auth::user()->created_at )->format(' %Y/%m/%d - %H:%M:%S - %p') }}
								</td>
							</tr>
							@if(\Auth::user()->userImages()->count() > 0)
							<tr>
								<td>تصاویر</td>
								<td>
									@foreach(\Auth::user()->userImages()->get() as $user_image)
									<div class="col-sm-2">
										<img class="img-responsive img-thumbnail" 
										src="/image/user-profile/{{ $user_image->image()->first()->id }}/{{ $user_image->image()->first()->original_name }}"/>
										<p class="text-center">	{{ $user_image->image()->first()->original_name }}	</p>
									</div>
									@endforeach
								</td>
							<tr>
							@endif
							<tr>
								<td>آپلود عکس</td>
								<td>
											<input type='file' accept='image/*' name="user_image" onchange='uploadImage(event)'>
									<div class="text-center">
									<img id='preview' class="img-responsive img-thumbnail">
									<p id='no-preview'>
										<span class="glyphicon glyphicon-camera"></span>
										<br/>
										پیش‌نمایش تصویر
									</p>
									</div>
								</td>
							</tr>
						</table>
						</div>
                    </div>
				</div>
			</form>
		</div>
	</div>
@endsection
@push('script')
<script>
 	$('#preview').hide();
  	var uploadImage = function(event) {
	    var input = event.target;
	    var reader = new FileReader();
	    reader.onload = function(){
		    $('#preview')[0].src = reader.result;
    	};
	    reader.readAsDataURL(input.files[0]);
	    $('#no-preview').hide();
	    $('#preview').show();
  	};
</script>
@endpush