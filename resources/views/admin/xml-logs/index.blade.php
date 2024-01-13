@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-articles"></span> XML Logs
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
			<div class="col-12 p-0">


			<table class="table table-bordered  table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Supplier Name</th>
						<th>Status</th>
						<th>Control</th>
					</tr>
				</thead>
				<tbody>
					{{-- @foreach($manual_bookings as $manual_booking)
					 <tr>
						<td>{{$manual_booking->booking_reference_id}}</td>
						<td>{{$manual_booking->company_name}}</td>
						<td> {{$manual_booking->guest_names}} </td>
						<td>{{$manual_booking->city}}</td>
						<td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $manual_booking->check_in_date)->format('d/m/Y')}}</td>
						<td>{{\Carbon\Carbon::createFromFormat('Y-m-d', $manual_booking->check_out_date)->format('d/m/Y')}}</td>
                        <td>{{$manual_booking->supplier_reference ?? ''}}</td>
						<td>{{$manual_booking->supplier_name}}</td>
						<td>{{$manual_booking->amount}}</td>
						<td>{{$manual_booking->markup}}</td>
						<td>{{$manual_booking->total_price}} {{$manual_booking->agent_currency}}</td>
						<td>{{$manual_booking->booking_status}}</td>
						<td> {{ $manual_booking->created_at->format('d/m/Y') }}</td>
						<td >
							@can('articles-read')
							<a href="{{route('admin.manual-bookings.show',['manual_booking'=>$manual_booking])}}">
								<span class="btn  btn-outline-primary btn-sm font-1 mx-1">
									<span class="fas fa-search "></span> Show
								</span>
							</a>
							@endcan

							@can('articles-update')
							<a href="{{route('admin.manual-bookings.edit',$manual_booking)}}">
								<span class="btn  btn-outline-success btn-sm font-1 mx-1">
									<span class="fas fa-wrench "></span> Edit
								</span>
							</a>
							@endcan

                            @can('articles-delete')
							<form method="POST" action="{{route('admin.manual-bookings.destroy',$manual_booking)}}" class="d-inline-block">@csrf @method("DELETE")
								<button class="btn  btn-outline-danger btn-sm font-1 mx-1" onclick="var result = confirm('Are You Sure Deleting This Booking');if(result){}else{event.preventDefault()}">
									<span class="fas fa-trash "></span> Delete
								</button>
							</form>
							@endcan
                        </td>
                        </tr>

					@endforeach --}}
				</tbody>
			</table>
			</div>
		</div>
		{{-- <div class="col-12 p-3">
			{{$articles->appends(request()->query())->render()}}
		</div> --}}
	</div>
</div>
@endsection
