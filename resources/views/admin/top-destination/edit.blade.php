@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.top-destination.update',$destination)}}">
            @csrf
            @method("PUT")
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Edit Destination : {{ $destination->name }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="name" required maxlength="190" class="form-control" value="{{ $destination->name }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Continent
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="continent"  size="1" style="height:30px;opacity: 0;">
                                <option {{ $destination->continent == "Asia" ? 'selected' : '' }} value="Asia">Asia </option>
                                <option {{ $destination->continent == "Mena Region" ? 'selected' : '' }} value="Mena Region">Mena Region </option>
                                <option {{ $destination->continent == "North America" ? 'selected' : '' }} value="North America">North America</option>
                                <option {{ $destination->continent == "Europe" ? 'selected' : '' }} value="Europe">Europe</option>
                                <option {{ $destination->continent == "South America" ? 'selected' : '' }} value="South America">South America</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input type="tel" name="city" required maxlength="190" class="form-control" value="{{ $destination->city }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Image
                        </div>
                        <div class="col-12 pt-3">
                            <img src="{{'/top-destination/'.$destination->image}}" style="width: 100px; height: 100px;">
                            <input type="file" name="image" maxlength="190" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <button class="btn btn-success" id="submitEvaluation">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
