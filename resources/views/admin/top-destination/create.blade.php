@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.top-destination.store')}}">
            @csrf
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <span class="fas fa-info-circle"></span> Add New Destination
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Continent
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" required name="continent"  size="1" style="height:30px;opacity: 0;">
                                <option value="">Select Continent</option>
                                <option value="Europe">Europe</option>
                                <option value="Asia">Asia</option>
                                <option value="Mena Region">Mena Region</option>
                                <option value="North America">North America</option>
                                <option value="South America">South America</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="city" required maxlength="190" class="form-control" value="{{old('city')}}" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Destination Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="name" required maxlength="190" class="form-control" value="{{old('name')}}" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Image
                        </div>
                        <div class="col-12 pt-3">
                            <input type="file" name="image" required maxlength="190" class="form-control" value="{{old('image')}}" placeholder="">
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
