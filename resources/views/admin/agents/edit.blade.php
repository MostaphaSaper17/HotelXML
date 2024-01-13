@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
    <div class="col-12 col-lg-12 p-0 ">
        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('admin.agents.update',$agent)}}">
            @csrf
            @method("PUT")
            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
            <div class="col-12 col-lg-8 p-0 main-box">
                <div class="col-12 px-0">
                    <div class="col-12 px-3 py-3">
                        <h3 style="direction: ltr">Edit Agent : {{ $agent->company_name }}</h3>
                    </div>
                    <div class="col-12 divider" style="min-height: 2px;"></div>
                </div>
                <div class="col-12 p-3 row">
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="person_name" required maxlength="190" class="form-control" value="{{ $agent->person_name }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Email Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="email" name="person_email" required maxlength="190" class="form-control" value="{{ $agent->person_email }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Person Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input type="tel" name="person_phone" required maxlength="190" class="form-control" value="{{ $agent->person_phone }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="management_name" required maxlength="190" class="form-control" value="{{ $agent->management_name }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Email Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="email" name="management_email" required maxlength="190" class="form-control" value="{{ $agent->management_email }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Management Phone Number
                        </div>
                        <div class="col-12 pt-3">
                            <input type="tel" name="management_phone" required maxlength="190" class="form-control" value="{{ $agent->management_phone }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            UserName
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="user_name" required maxlength="190" class="form-control" value="{{ $agent->user_name }}">
                        </div>
                    </div>
                    {{-- <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Password
                        </div>
                        <div class="col-12 pt-3">
                            <input type="password" name="password"  class="form-control" required>
                        </div>
                    </div> --}}
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Name
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="company_name" required maxlength="190" class="form-control" value="{{ $agent->company_name }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Company Reg No.
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" name="company_reg_no" min="1" required maxlength="190" class="form-control" value="{{ $agent->company_reg_no }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Nature Of Business
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="nature_of_business"  size="1" style="height:30px;opacity: 0;">
                                <option {{ $agent->nature_of_business == "Wholesalers" ? 'selected' : '' }} value="Wholesalers">Wholesalers</option>
                                <option {{ $agent->nature_of_business == "Travel Agents" ? 'selected' : '' }} value="Travel Agents">Travel Agents</option>
                                <option {{ $agent->nature_of_business == "Tour Operation" ? 'selected' : '' }} value="Tour Operation">Tour Operation</option>
                                <option {{ $agent->nature_of_business == "Corporates" ? 'selected' : '' }} value="Corporates">Corporates</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Address
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="address" required maxlength="190" class="form-control" value="{{ $agent->address }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Country
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="country"  size="1" style="height:30px;opacity: 0;">
                                @foreach ($countries as $country)
                                    <option {{ $agent->country == $country->name ? 'selected' : '' }} value="{{ $country->name }}"> {{ $country->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            City
                        </div>
                        <div class="col-12 pt-3">
                            <input type="text" name="city" required maxlength="190" class="form-control" value="{{ $agent->city }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Currency
                        </div>
                        <div class="col-12 pt-3">
                            <select class="form-control select2-select" name="currency"  size="1" style="height:30px;opacity: 0;">
                                <option {{ $agent->currency == "USD" ? 'selected' : ''  }} value="USD">USD</option>
                                <option {{ $agent->currency == "EUR" ? 'selected' : ''  }} value="EUR">EUR</option>
                                <option {{ $agent->currency == "GBP" ? 'selected' : ''  }} value="GBP">GBP</option>
                                <option {{ $agent->currency == "BOB" ? 'selected' : ''  }} value="BOB">BOB</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Pincode/Zipcode
                        </div>
                        <div class="col-12 pt-3">
                            <input type="number" name="pincode" required maxlength="190" class="form-control" value="{{ $agent->pincode }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Website
                        </div>
                        <div class="col-12 pt-3">
                            <input type="url" name="website" required maxlength="190" class="form-control" value="{{ $agent->website }}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 p-2">
                        <div class="col-12">
                            Status
                        </div>
                        <div class="col-12 pt-3">
                            <div class="form-switch">
                                <input name="is_active" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{$agent->is_active==1?"checked":""}} style="width: 50px;height:25px" value="1">
                           </div>
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
