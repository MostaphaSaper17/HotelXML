@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-markups"></span> B2B Users
				</div>
				<div class="col-12 col-lg-4 p-0">
				</div>
			</div>
			<div class="col-12 divider" style="min-height: 2px;"></div>
		</div>

		<div class="col-12 py-2 px-2 row">
			<div class="col-12 col-lg-4 p-2">
				<form method="GET">
					<input type="text" name="q" class="form-control" placeholder="Search ... " value="{{request()->get('q')}}">
				</form>
			</div>
		</div>
		<div class="col-12 p-3" style="overflow:auto">
			<div class="col-12 p-0" style="min-width:900px;">


			<table class="table table-bordered  table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Company Name</th>
						<th>Company Email</th>
						<th>Company Phone Number</th>
						<th> ( % ) Markup</th>
						<th>Control</th>
					</tr>
				</thead>
				<tbody>
					@foreach($markups as $markup)
					 <tr>
						<td style="width: 10px;">{{$markup->id}}</td>
						<td style="width: 120px;">{{$markup->company_name}}</td>
						<td style="width: 60px;">{{$markup->management_email}}</td>
						<td style="width: 120px;">{{$markup->management_phone}}</td>
						<td style="width: 60px;">{{$markup->markup}}</td>
						<td style="width: 80px;">

							@can('articles-update')
							<a href="{{route('admin.agents-markup.edit',$markup)}}">
								<span class="btn  btn-outline-success btn-sm font-1 mx-1">
									<span class="fas fa-wrench "></span> Edit
								</span>
							</a>
							@endcan

						</td>
					</tr>

					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		{{-- <div class="col-12 p-3">
			{{$markups->appends(request()->query())->render()}}
		</div> --}}
	</div>
</div>
@endsection
