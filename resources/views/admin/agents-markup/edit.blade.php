@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.agents-markup.update',$markup->id)}}">
            @csrf
            @method("PUT")
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Edit Markup For Agent : {{ $markup->company_name }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="company_name" disabled maxlength="190" class="form-control" value="{{ $markup->company_name }}">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Email Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="email" name="management_email" disabled maxlength="190" class="form-control" value="{{ $markup->management_email }}">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input type="tel" name="management_phone" disabled maxlength="190" class="form-control" value="{{ $markup->management_phone }}">
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            ( % ) Markup
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="markup" required maxlength="190" class="form-control" value="{{ $markup->markup }}">
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
