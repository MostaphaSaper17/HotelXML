@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-articles"></span> Transactions
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
						<th>Reference</th>
						<th>Agent Name</th>
						<th>Balance</th>
						<th>Currency</th>
						<th>Type</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					@foreach($transactions as $transaction)
					<tr>
						<td>{{ $transaction->reference }}</td>
						<td>{{ $transaction->company_name }}</td>
						<td>{{ $transaction->balance }}</td>
						<td>{{ $transaction->currency }}</td>
						<td>{{ $transaction->type }}</td>
						<td> {{ $transaction->created_at->format('d/m/Y') }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		{{-- <div class="col-12 p-3">
			{{$transactions->appends(request()->query())->render()}}
		</div> --}}
	</div>
</div>
@endsection
