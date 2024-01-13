@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.offers.update',$offer)}}">
            @csrf
            @method("PUT")
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Edit Offer : {{ $offer->title }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-12 p-2">
                        <div class="col-12">
                            Offer
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="offer" required maxlength="190" class="form-control" value="{{ $offer->offer }}">
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="col-12">
                            Image
                        </div>
                        <div class="col-12 pt-3">
                            <img src="{{'/offers/'.$offer->image}}" style="width: 100px; height: 100px;">
                            <input type="file" name="image" maxlength="190" class="form-control">
                        </div>
                        <div class="col-12 pt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <button class="btn btn-success" id="submitEvaluation">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
