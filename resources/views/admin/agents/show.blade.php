@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div style="direction: ltr" class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Show Agent : {{ $agent->company_name }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Name
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->person_name}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Email Address
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->person_email}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->person_phone}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Name
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->management_name}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Email Address
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->management_email}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->management_phone}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            UserName
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->user_name}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Name
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->company_name}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Reg No.
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->company_reg_no}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Nature Of Business
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->nature_of_business}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Address
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->address}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Country
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->country}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->city}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Currency
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->currency}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Pincode/Zipcode
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->pincode}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Website
                        </div>
                        <div class="col-12 pt-3">
                            <input disabled maxlength="190" class="form-control" value="{{$agent->website}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Status
                        </div>
                        <div class="col-12 pt-3">
                            <div class="form-switch">
                                <input name="open_url_in" disabled class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{$agent->is_active==1?"checked":""}} style="width: 50px;height:25px">
                           </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
