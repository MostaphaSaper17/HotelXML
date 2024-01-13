@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-agents"></span> Top Destinations
				</div>
				<div class="col-12 col-lg-4 p-0">
				</div>
                <div class="col-12 col-lg-4 p-2 text-lg-end">
					@can('tags-create')
					<a href="{{route('admin.top-destination.create')}}">
					<span class="btn btn-primary"><span class="fas fa-plus"></span> Add New </span>
					</a>
					@endcan
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
			<div class="col-12 p-0" style="min-width:1100px;">


			<table class="table table-bordered  table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Continent</th>
						<th>City</th>
						<th>image</th>
						<th>Control</th>
					</tr>
				</thead>
				<tbody>
					@foreach($destinations as $destination)
					 <tr>
						<td>{{$destination->id}}</td>
						<td>{{$destination->name}}</td>
						<td>{{$destination->continent}}</td>
						<td>{{$destination->city}}</td>
						<td> <img src="{{'/top-destination/'.$destination->image}}" style="width: 40px; height: 40px;"></td>
                        <td>
							 @can('articles-read')
							<a href="{{route('admin.top-destination.show',$destination)}}">
								<span class="btn  btn-outline-primary btn-sm font-1 mx-1">
									<span class="fas fa-search "></span> Show
								</span>
							</a>
							@endcan


							@can('articles-update')
							<a href="{{route('admin.top-destination.edit',$destination)}}">
								<span class="btn  btn-outline-success btn-sm font-1 mx-1">
									<span class="fas fa-wrench "></span> Edit
								</span>
							</a>
							@endcan
                            @can('articles-delete')
                            <form method="POST" action="{{route('admin.top-destination.destroy',$destination)}}" class="d-inline-block">@csrf @method("DELETE")
                                <button class="btn  btn-outline-danger btn-sm font-1 mx-1" onclick="var result = confirm('Do You Really Want to Delete this Agent?');if(result){}else{event.preventDefault()}">
                                    <span class="fas fa-trash "></span> Delete
                                </button>
                            </form>
                            @endcan
						</td>
					</tr>

					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		{{-- <div class="col-12 p-3">
			{{$agents->appends(request()->query())->render()}}
		</div> --}}
	</div>
</div>
@endsection
