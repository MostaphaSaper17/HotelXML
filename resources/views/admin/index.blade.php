@extends('layouts.admin')
@section('content')
<div class="col-12 p-3 row">
@can('users-read')
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit" >
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff;border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-users font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1"  href="{{route('admin.users.index')}}" style="color: #212529">
				Users
				<h6 class="font-3">{{\App\Models\User::count()}}</h6>
			</a>
		</div>
	</div>
</div>
@endcan
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit" >
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-bells font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.notifications.index')}}" style="color: #212529">
				Notifications
                <h6 class="font-3">{{\App\Models\Notification::where('user_type','admin')->where('isRead',0)->count()}}</h6>
			</a>
		</div>
	</div>
</div>
@can('articles-read')
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit" >
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-users font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.articles.index')}}" style="color: #212529;">
				B2B Users
				<h6 class="font-3">{{\App\Models\Agent::count()}}</h6>
			</a>
		</div>
	</div>
</div>
@endcan
@can('categories-read')
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit" >
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-tag font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.categories.index')}}" style="color: #212529;">
				Booking Orders
				<h6 class="font-3">
                    {{-- {{\App\Models\Category::count()}} --}} 0
                </h6>
			</a>
		</div>
	</div>
</div>
@endcan
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit">
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-file font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.files.index')}}" style="color: #212529;">
				Clock
				<h6 id="currentDateTime" class="font-3"></h6>
			</a>
		</div>
	</div>
</div>
{{--@can('menus-read')
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit">
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-list font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.menus.index')}}" style="color: #212529;">
				Menus
				<h6 class="font-3">{{\App\Models\Menu::count()}}</h6>
			</a>
		</div>
	</div>
</div>
@endcan
@can('pages-read')
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit">
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-file-invoice font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.pages.index')}}" style="color: #212529;">
				Pages
				<h6 class="font-3">{{\App\Models\Page::count()}}</h6>
			</a>
		</div>
	</div>
</div>
@endcan
@can('contacts-read')
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit">
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-phone font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.contacts.index')}}" style="color: #212529;">
				Coneeections
				<h6 class="font-3">{{\App\Models\Contact::count()}}</h6>
			</a>
		</div>
	</div>
</div>
@endcan
@can('announcements-read')
<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 px-2 my-2">
	<div class="col-12 px-0 py-1 d-flex main-box-wedit">
		<div style="width: 65px;" class="p-2">
			<div class="col-12 px-0 text-center d-flex align-items-center justify-content-center" style="background: #0194fe;color: #fff; border-radius: 50%;width: 55px;height:55px">
				<span class="fal fa-bullhorn font-5" ></span>
			</div>
		</div>
		<div style="width: calc(100% - 80px)" class="px-2 py-2">
			<a class="font-1" href="{{route('admin.announcements.index')}}" style="color: #212529;">
				Advertisements
				<h6 class="font-3">{{\App\Models\Announcement::count()}}</h6>
			</a>
		</div>
	</div>
</div>
@endcan --}}

<div class="col-12 px-2 py-2">
	<div style="height: 4px ;background: rgb(118 169 169);border-radius: 7px;transition: width .5s ease-in-out;width: 0%;" id="home-dashboard-divider"></div>
</div>
<livewire:dashboard-statistics />
</div>

<script>
    function updateDateTime() {
        var currentDateTimeElement = document.getElementById('currentDateTime');
        var now = new Date();
        currentDateTimeElement.innerText = now.toLocaleTimeString(); // Adjust the formatting as needed
    }

    // Update the date and time every second
    setInterval(updateDateTime, 1000);
</script>

@endsection
