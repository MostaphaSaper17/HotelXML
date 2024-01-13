@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-agents"></span> B2B Users
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
			<div class="col-12 p-0" style="min-width:1100px;">


			<table class="table table-bordered  table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Company Name</th>
						<th>Company Phone Number</th>
						<th>Company Email</th>
						<th>Status</th>
						<th>Control</th>
					</tr>
				</thead>
				<tbody>
					@foreach($agents as $agent)
					 <tr>
						<td>{{$agent->id}}</td>
						<td>{{$agent->company_name}}</td>
						<td>{{$agent->management_phone}}</td>
						<td>{{$agent->management_email}}</td>
						<td>
                            <input disabled class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{$agent->is_active==1?"checked":""}} style="width: 50px;height:25px">
						</td>
                        <td>
							 @can('articles-read')
							<a href="{{route('admin.agents.show',$agent)}}">
								<span class="btn  btn-outline-primary btn-sm font-1 mx-1">
									<span class="fas fa-search "></span> Show
								</span>
							</a>
							@endcan


							@can('articles-update')
							<a href="{{route('admin.agents.edit',$agent)}}">
								<span class="btn  btn-outline-success btn-sm font-1 mx-1">
									<span class="fas fa-wrench "></span> Edit
								</span>
							</a>
							@endcan
                            @can('articles-delete')
                            <form method="POST" action="{{route('admin.agents.destroy',$agent)}}" class="d-inline-block">@csrf @method("DELETE")
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
