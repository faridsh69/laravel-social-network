@extends('admin.dashboard')
@section('breadcrumb')
	<ol class="breadcrumb">
		<li>داشبورد</li>
		<li class="active">مشاهده گالری های من</li>
	</ol>
@stop
@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">مدیریت گالری ها</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
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
				<div class="half-seperate"></div>
				<form class="form" method="POST">
					{{ csrf_field() }}
				  	<div class="form-group">
				    	<label for="title">عنوان:</label>
				   	 	<input type="text" class="form-control input-sm" id="title" name="title" value="{{ old('title') }}">
				  	</div>
				  	<div class="form-group">
				    	<label for="address">آدرس: </label>
				    	<input type="text" class="form-control input-sm" id="address" name="address" value="{{ old('address') }}">
				  	</div>
				  	<div class="form-group">
				    	<label for="description">توضیحات: </label>
				    	<input type="text" class="form-control input-sm" id="description" name="description" value="{{ old('description') }}">
				  	</div>

				  	<div class="form-group">
				    	<label for="phone">تلفن: </label>
				    	<input type="text" class="form-control input-sm" id="phone" name="phone" value="{{ old('phone') }}">
				  	</div>
				  	<div class="form-group">
				    	<label for="manager">مدیر: </label>
				    	<input type="text" class="form-control input-sm" id="manager" name="manager" value="{{ old('manager') }}">
				  	</div>
				  	<button type="submit" class="btn btn-default input-sm">ثبت گالری</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection