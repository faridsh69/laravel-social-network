@extends('layout.master')
@section('fluid-container')
<div class="row">
	<div class="col-sm-3">
		<div class="list-group">
			<a href="/admin/user/profile" class="list-group-item {{ Request::segment(3) == 'profile' ? 'active':'' }}">
			پروفایل کاربری</a>
			<a href="/admin/user/manage" class="list-group-item {{ Request::segment(3) == 'manage' ? 'active':'' }}">
			مدیریت کاربران</a>
			<a href="/admin/gallery" class="list-group-item {{ Request::segment(2) == 'gallery' ? 'active':'' }}">
			گالری های من</a>
			<a href="/admin/log" class="list-group-item {{ Request::segment(2) == 'log' ? 'active':'' }}">
			مشاهده لاگ</a>
			<a href="/admin/user/logout" class="list-group-item {{ Request::segment(3) == 'logout' ? 'active':'' }}">
			خروج</a>
		</div>
	</div>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-xs-12">
				@yield('breadcrumb')
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				@yield('content')
			</div>
		</div>
	</div>
</div>
@endsection