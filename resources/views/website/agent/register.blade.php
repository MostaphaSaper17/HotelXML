@extends('layouts.website')
@section('content')

<div class="modal-form-home">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center pt-5">
                <h4 class="modal-title">Register here as an Agent</h4>
            </div>
            <div class="modal-body">
                <h5 class="mb-0">Personal Agent Information:</h5>
                <form method="POST" action="{{ route('agent.register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="person_name">Person Name</label>
                                <input type="text" id="person_name" name="person_name" class="form-control inputg" placeholder="Name" autocomplete="off">
                                @error('person_name')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="person_email ">Email Address</label>
                                <input type="text" id="person_email" name="person_email" class="form-control inputg" placeholder="Email" autocomplete="off">
                                @error('person_email')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="person_phone">Phone Number</label>
                                <input type="text" id="person_phone" name="person_phone" class="form-control inputg" placeholder="Phone" autocomplete="off">
                                @error('person_phone')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-0">Management Contact:</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="management_name">Person Name</label>
                                <input type="text" id="management_name" name="management_name" class="form-control inputg" placeholder="Name" autocomplete="off">
                                @error('management_name')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="management_email">Email Address</label>
                                <input type="text" id="management_email" name="management_email" class="form-control inputg" placeholder="Email" autocomplete="off">
                                @error('management_email')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="management_phone">Phone Number</label>
                                <input type="text" id="management_phone" name="management_phone" class="form-control inputg" placeholder="Phone" autocomplete="off">
                                @error('management_email')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input type="text" id="user_name" name="user_name" class="form-control inputg" placeholder="Username" autocomplete="off" >
                                @error('user_name')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control inputg" placeholder="Password" autocomplete="off">
                                @error('password')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control inputg" placeholder="Confirm Password" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mb-0">Company Details:</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input type="text" id="company_name" name="company_name" class="form-control inputg" placeholder="Name" autocomplete="off" >
                                @error('company_name')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="company_reg_no">Company Reg. No.</label>
                                <input type="number" id="company_reg_no" name="company_reg_no" class="form-control inputg" placeholder="Reg. No." autocomplete="off" >
                                @error('company_reg_no')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="nature_of_business">Nature of Business</label>
                                <select id="nature_of_business" name="nature_of_business" class="form-control inputg" required >
                                    <option value="Wholesalers" selected>Wholesalers</option>
                                    <option value="Travel agents">Travel Agents</option>
                                    <option value="Tour Operation">Tour Operation</option>
                                    <option value="Corporates">Corporates</option>
                                </select>
                                @error('nature_of_business')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control inputg" placeholder="Place Address" autocomplete="off">
                                @error('address')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control inputg" name="country" >
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->name }}"> {{ $country->name }} </option>
                                    @endforeach
                                </select>
                                @error('country')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" class="form-control inputg" placeholder="Place City" autocomplete="off">
                                @error('city')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="currency">Currency</label>
                                <select id="currency" name="currency" class="form-control inputg" required>
                                    <option value="USD" selected>USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="GBP">GBP</option>
                                    <option value="BOB">BOB</option>
                                </select>
                                @error('currency')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="pincode">Pincode/Zipcode</label>
                                <input type="text" id="pincode" name="pincode" class="form-control inputg" placeholder="Place Pincode/Zipcode" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" id="website" name="website" class="form-control inputg" placeholder="Place Website" autocomplete="off">
                                @error('website')
                                    <label style="color: red">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group profile-userbuttons">
                                <button type="submit" class="submit btn_1">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="clearfix"></div>

@endsection
