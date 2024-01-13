@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-articles"></span> Blogs
				</div>
				<div class="col-12 col-lg-4 p-0">
				</div>
				<div class="col-12 col-lg-4 p-2 text-lg-end">
					@can('articles-create')
					<a href="{{route('admin.blogs.create')}}">
						<span class="btn btn-primary"><span class="fas fa-plus"></span> New Add</span>
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
			<div class="col-12 p-0" style="">


			<table class="table table-bordered  table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>title</th>
						<th>blog</th>
						<th>image</th>
						<th>control</th>
					</tr>
				</thead>
				<tbody>
					@foreach($blogs as $blog)
					<tr>
						<td>{{$blog->id}}</td>
						<td>{{$blog->title}}</td>
						<td>{!! $blog->blog !!}</td>
						<td><img src="{{'/blog/'.$blog->image}}" style="width: 40px; height: 40px;"></td>
						<td>

                        {{--
							@can('articles-read')
							<a href="{{route('article.show',['article'=>$article])}}">
								<span class="btn  btn-outline-primary btn-sm font-1 mx-1">
									<span class="fas fa-search "></span> عرض
								</span>
							</a>
							@endcan
                        --}}

							@can('articles-update')
							<a href="{{route('admin.blogs.edit',$blog)}}">
								<span class="btn  btn-outline-success btn-sm font-1 mx-1">
									<span class="fas fa-wrench "></span> Edit
								</span>
							</a>
							@endcan
							@can('articles-delete')
							<form method="POST" action="{{route('admin.blogs.destroy',$blog)}}" class="d-inline-block">@csrf @method("DELETE")
								<button class="btn  btn-outline-danger btn-sm font-1 mx-1" onclick="var result = confirm('Do you want to delete this blog ?');if(result){}else{event.preventDefault()}">
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
			{{$articles->appends(request()->query())->render()}}
		</div> --}}
	</div>
</div>
@endsection
