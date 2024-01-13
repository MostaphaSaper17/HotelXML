@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div style="direction: ltr" class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Show Destination : {{ $destination->destination }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Name
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$destination->name}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Continent
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$destination->continent}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$destination->city}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Image
                        </div>
                        <div class="col-12 pt-3">
                            <img src="{{'/top-destination/'.$destination->image}}" style="width: 100px; height: 100px;">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
