@extends('layouts.agent')
@section('content')

<div class="clearfix"></div>
<!--Profile Admin Area Start-->
<div class="container-fluid profile-admin-area" id="st-content-wrapper">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-topline-aqua">
                <div class="card-body no-padding height-9">

                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> Hi {{Auth::guard('agent')->user()->person_name }}</div>
                    </div>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Phone</b> <a class="pull-right">{{ Auth::guard('agent')->user()->person_phone }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">{{ Auth::guard('agent')->user()->person_email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Address</b> <a class="pull-right">{{ Auth::guard('agent')->user()->address }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Currency</b> <a class="pull-right">{{ Auth::guard('agent')->user()->currency }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Documents</b> <a class="pull-right">Verified&nbsp;<img src="{{ asset('website/images/verified-icon.png') }}" alt="" style="vertical-align: top;"></a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">Verified&nbsp;<img src="{{ asset('website/images/verified-icon.png') }}" alt="" style="vertical-align: top;"></a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR USER TITLE -->

                </div>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Popup -->
            <div class="modal fade modal-map" id="st-modal-show-map" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg">
                        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('agent.profile.update',$agent)}}">
                            @csrf
                            @method("PUT")
                            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Profile</h4>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="mb-5">Personal Agent Information:</h5>
                                    <div class="row">
                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Person Name</label>
                                                    <input type="text" id="person_name" name="person_name" value="{{ $agent->person_name }}" class="inputg" placeholder="Name" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Email Address</label>
                                                    <input type="email" id="person_email" name="person_email" value="{{ $agent->person_email }}" class="inputg" placeholder="Email"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Phone Number</label>
                                                    <input type="tel" id="person_phone" name="person_phone" value="{{ $agent->person_phone }}" class="inputg" placeholder="Phone"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-md-12">
                                            <h5 class="mb-5">Management Contact:</h5>
                                        </div>
                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Person Name</label>
                                                    <input type="text" id="management_name" name="management_name" value="{{ $agent->management_name }}" class="inputg" placeholder="Name" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Email Address</label>
                                                    <input type="email" id="person_email" name="management_email" value="{{ $agent->management_email }}" class="inputg" placeholder="Email"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Phone Number</label>
                                                    <input type="tel" id="management_phone" name="management_phone" value="{{ $agent->management_phone }}" class="inputg" placeholder="Phone"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Username</label>
                                                    <input type="text" id="user_name" name="user_name" value="{{ $agent->user_name }}" class="inputg" placeholder="Username" autocomplete="off" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h5 class="mb-5">Company Details:</h5>
                                        </div>
                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Company Name</label>
                                                    <input type="text" id="" name="" value="{{ $agent->company_name }}" class="inputg" placeholder="Name" autocomplete="off" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Company Reg. No.</label>
                                                    <input type="text" id="" name="" value="{{ $agent->company_reg_no}}" class="inputg" placeholder="Reg. No." autocomplete="off" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Nature Of Business</label>
                                                    <input type="text" id="" name="" value="{{ $agent->nature_of_business}}" class="inputg" placeholder="Reg. No." autocomplete="off" disabled="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Address</label>
                                                    <input type="text" id="address" name="address" value="{{ $agent->address }}" class="inputg" placeholder="Place Address"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Country</label>
                                                    <select name="country" id="country" class="inputg" required="">
                                                        @foreach ($countries as $country)
                                                        <option {{ $agent->country == $country->name ? 'selected' : '' }} value="{{ $country->name }}">{{ $country->name }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>City</label>
                                                    <input type="text" id="city" name="city" value="{{ $agent->city }}" class="inputg" placeholder="Place City"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Currency</label>
                                                    <input type="text" disabled value="{{ $agent->currency }}" class="inputg">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 border-right">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Pincode/Zipcode</label>
                                                    <input type="num" min="1" id="pincode" name="pincode" value="{{ $agent->pincode }}" class="inputg"
                                                        placeholder="Place Pincode/Zipcode" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-extra-field dropdown clearfix field-detination">
                                                <div class="dropdown">
                                                    <label>Website</label>
                                                    <input type="url" id="website" name="website" value="{{ $agent->website }}" class="inputg" placeholder="Place Website"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="profile-userbuttons">
                                                    <button class="btn_1 medium btn-success" id="submitEvaluation">Save</button>
                                                    {{-- <a href="#!" class="btn_1 medium">Edit Profile</a> --}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            <!-- Icon Cards-->

            <div class="row">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body"><div class="card-body-icon"><i class="fas fa-fw fa-user-plus"></i></div>
                            <div class="mr-5"><h5>Manage Users</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab4" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon"><i class="fas fa-fw fa-user-circle-o"></i></div>
                            <div class="mr-5"><h5>Manage Operation Staff</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab3" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon"><i class="fas fa-fw fa-credit-card-alt"></i></div>
                            <div class="mr-5"><h5>Transactions</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab5" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-success o-hidden h-100">
                        @if (\App\Models\Notification::where('user_type',Auth::guard('agent')->user()->company_name)->where('isRead',0)->count() > 0)
                            <div class="card-body">
                                <div class="d-flex justify-content-center" style="position: absolute;
                                    z-index: 0;
                                    background-color: rgb(255, 0, 0);
                                    top: 10px;
                                    right: 10px;
                                    border-radius: 50%;
                                    height: 40px;
                                    width: 40px;
                                    font-size: 30px;
                                    opacity: 0.8;">
                                    {{\App\Models\Notification::where('user_type',Auth::guard('agent')->user()->company_name)->where('isRead',0)->count()}}
                                </div>
                                <div class="mr-5"><h5>Messages</h5></div>
                            </div>
                        @else
                            <div class="card-body">
                                <div class="card-body-icon"><i class="fas fa-fw fa-envelope-open"></i></div>
                                <div class="mr-5"><h5>Messages</h5></div>
                            </div>
                        @endif
                        <a class="card-footer text-white clearfix small z-1 nav-link-extra" href="#tab6" data-toggle="tab">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
	        </div>
		    <!-- /cards -->
            <div class="st-tabs">
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item tab-all active"><a class="active" href="#tab1" data-toggle="tab"><i class="fas fa-fw fa-bullseye"></i>Overview</a></li>
                    <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#!" data-toggle="modal" data-target="#st-modal-show-map"><i class="fas fa-fw fa-thumb-tack"></i>Edit Profile</a></li>
                    <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab2" data-toggle="tab"><i class="fas fa-fw fa-lock"></i>Change Password</a></li>
                </ul>

        <div class="tab-content">
            <div id="tab1" class="tab-pane fade in active">
                <div class="card mb-3" style="display: none;">
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-3 modern-card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="header-title">
                                    <i class="fas fa-chart-line icon"></i> Monthly Report
                                </div>
                                <select id="agentSelect" name="month">
                                    <option {{ $currentMonthNumber == '1' ? 'selected' : '' }} value="1">January</option>
                                    <option {{ $currentMonthNumber == '2' ? 'selected' : '' }} value="2">February</option>
                                    <option {{ $currentMonthNumber == '3' ? 'selected' : '' }} value="3">March</option>
                                    <option {{ $currentMonthNumber == '4' ? 'selected' : '' }} value="4">April</option>
                                    <option {{ $currentMonthNumber == '5' ? 'selected' : '' }} value="5">May</option>
                                    <option {{ $currentMonthNumber == '6' ? 'selected' : '' }} value="6">June</option>
                                    <option {{ $currentMonthNumber == '7' ? 'selected' : '' }} value="7">July</option>
                                    <option {{ $currentMonthNumber == '8' ? 'selected' : '' }} value="8">August</option>
                                    <option {{ $currentMonthNumber == '9' ? 'selected' : '' }} value="9">September</option>
                                    <option {{ $currentMonthNumber == '10' ? 'selected' : '' }} value="10">October</option>
                                    <option {{ $currentMonthNumber == '11' ? 'selected' : '' }} value="11">November</option>
                                    <option {{ $currentMonthNumber == '12' ? 'selected' : '' }} value="12">December</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div class="report-info parentDiv">
                                    <p>Total Amount Of Orders, {{ $month }}</p>
                                    <h4>{{ $monthReport }} <span >{{ $currency }}</span></h4>
                                </div>
                                <canvas id="myBarChart" width="100" height="50" hidden></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-3 modern-card">
                            <div class="card-header">Credit Statement Used</div>
                            <div class="card-body">
                                <canvas id="myBarChart-2" width="100" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-3 modern-card">
                            <div class="card-header">Your Booking Statistics</div>
                            <div class="card-body">
                                <canvas id="myPieChart" width="100%" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-pane fade">
               <div class="row">
                <div class="col-lg-10">
                    <div class="card mb-3">
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                            <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{route('agent.profile.password',$agent)}}">
                                @csrf
                                @method("PUT")
                                <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">
                                <div class="row">
                                    <div class="col-md-6 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Current Password</label>
                                                <input type="password" id="" name="current_password" value="" class="inputg" placeholder="Place Current Password" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>New Password</label>
                                                <input type="password" id="" name="new_password" value="" class="inputg" placeholder="Place New Password" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Confirm New Password</label>
                                                <input type="password" id="" name="confirm_new_password" value="" class="inputg" placeholder="Confirm New Password" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="profile-userbuttons">
                                                <button class="btn_1 medium btn-success" id="submitEvaluation">Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="tab3" class="tab-pane fade">
                <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">Manage Operation Staff</div>
                <form method="POST" action="{{ route('agent.register-employee') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>User Name</label>
                                        <input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}" class="inputg" required placeholder="Place Username" autocomplete="off">
                                        @error('user_name')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Password</label>
                                        <input type="password" id="password" name="password" value="" class="inputg" required placeholder="Place Password" autocomplete="off">
                                        @error('passowrd')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Status</label>
                                        <select id="status" name="status" required class="inputg">
                                            <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Active</option>
                                            <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-12 mobile-hide-hr"><hr></div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-3">
                                    <div class="table-bg-3"><div class="ckeck-area">
                                        <input type="checkbox" name="book" id="book" {{old('book')==1?"checked":""}} value="1">
                                        <label for="checkbox_id">Book</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="table-bg-1">
                                    <div class="ckeck-area">
                                        <input type="checkbox" name="cancel" id="cancel" {{old('cancel')==1?"checked":""}} value="1">
                                        <label for="checkbox_id">cancellation</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="table-bg-2">
                                    <div class="ckeck-area">
                                        <input type="checkbox" name="pay" id="pay" {{old('pay')==1?"checked":""}} value="1">
                                        <label for="checkbox_id"> Pay Booking</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix"></div>
                        <div class="col-md-12 mobile-hide-hr"><hr></div>
                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>First Name</label>
                                        <input type="text" id="first_name" name="first_name" required value="{{ old('first_name') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('first_name')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Last Name</label>
                                        <input type="text" id="last_name" name="last_name" required value="{{ old('last_name') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('last_name')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Designation</label>
                                        <input type="text" id="designation" name="designation" required value="{{ old('designation') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('designation')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-12 mobile-hide-hr"><hr></div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Address</label>
                                        <input type="text" id="address" name="address" required value="{{ old('address') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('address')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Email</label>
                                        <input type="email" id="email" name="email" required value="{{ old('email') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('email')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Phone Number</label>
                                        <input type="tel" id="phone" name="phone" required value="{{ old('phone') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('phone')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-12 mobile-hide-hr"><hr></div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Mobile</label>
                                        <input type="tel" id="mobile" name="mobile" required value="{{ old('mobile') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('mobile')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Country</label>
                                        <select id="country" name="country" required class="inputg">
                                            @foreach ($countries as $country)
                                                <option {{ old('country')  == $country->name ? 'selected' : '' }} value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>City</label>
                                        <input type="text" id="city" name="city" required value="{{ old('city') }}" class="inputg" placeholder="Place Username" autocomplete="off">
                                        @error('city')
                                            <label style="color: red">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-12 mobile-hide-hr"><hr></div>
                        <div class="clearfix"></div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="profile-userbuttons"><button type="submit" class="submit btn_1 medium">Submit</button></div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
</div>
            </div>
            <div id="tab4" class="tab-pane fade">
            <div class="card mb-3">
                <div class="card-header">Manage Users</div>
                <div class="card-body">
                <!-- data table -->
                <div class="table-responsive">
            <table class="table table-room-type table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Privileges</th>
                  <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td class="max-space">{{ $employee->first_name }}</td>
                        <td class="min-space">{{ $employee->email }}</td>
                        <td class="min-space">{{ $employee->phone }}</td>
                        <td class="min-space"><span class="{{ $employee->book == 1 ? 'bg-success' : 'bg-danger' }} label">Book</span>
                            <span class="{{ $employee->cancel == 1 ? 'bg-success' : 'bg-danger' }} label label">Cancel</span>
                            <span class="{{ $employee->pay == 1 ? 'bg-success' : 'bg-danger' }} label label">Pay</span></td>
                        <td class="min-space">
                            <a href="#" class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons"></i></a>
                            <a href="#" class="view" title="" data-toggle="tooltip" data-original-title="De-Active"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
                </div>
                <!-- /data table -->
                </div>
            </div>
            </div>
            <div id="tab5" class="tab-pane fade">
            <div class="card mb-3">
                <div class="card-header">Transactions</div>
                <div class="card-body">
                    <div class="profile-userbuttons mar-b-20">
                        <a href="#!" class="btn_1 medium">Send Deposit Request</a>
                        <a href="#!" class="btn_1 medium">Top up by credit card</a>
                    </div>
                    <div class="table-responsive mar-b-20">
                                            <table class="table table-room-type table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Transactions</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td class="max-space">Total Debits:</td>
                                                    <td class="min-space">{{ $Debit }} {{ $agent->currency }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="max-space">Total Credits:</td>
                                                    <td class="min-space">{{ $Credit }} {{ $agent->currency }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="max-space">Balance:</td>
                                                    <td class="min-space"><b>{{ $agent->balance }} {{ $agent->currency }}</b></td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                <!-- data table -->
                <div class="table-responsive">
            <table class="table table-room-type table-bordered" id="transactions-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Reference</th>
                  <th>Amount</th>
                  <th>Currency</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Invoice</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($transactions as $transaction)

                    <tr>
                        <td class="max-space">{{ $transaction->reference }}</td>
                        <td class="min-space">{{ $transaction->balance }}</td>
                        <td class="min-space">{{ $transaction->currency }}</td>
                        @if($transaction->type == 'Credit')
                            <td class="min-space"><span class="bg-success label">Credit</span></td>
                        @elseif($transaction->type == 'Debit')
                            <td class="min-space"><span class="bg-danger label">Debit</span></td>
                        @else
                            <td class="min-space"><span class="bg-success label">Manual</span></td>
                        @endif
                        <td class="min-space">{{ $transaction->created_at->format('d/m/Y') }}</td>
                        <td class="min-space">
                            <button   class="icon-reply" style="cursor: pointer;"  ref="javascript:void(0);"  data-toggle="modal" data-target="#modalView" >
                                <i class="material-icons"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
              </tbody>

            </table>
                </div>
                <!-- /data table -->
                </div>
            </div>
            </div>
            <div id="tab6" class="tab-pane fade">
            <div class="card mb-3">
                <div class="card-header">Messages</div>
                <div class="card-body">
                    <div class="st-tabs">
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item tab-all active"><a class="active" href="#tab8" data-toggle="tab"><i class="fas fa-fw fa-inbox"></i>Open Tickets<span class="text-danger" style="margin-left: 5px" >{{ \App\Models\Notification::where('title', 'like', '%' . 'Open' . '%')->where('user_type',Auth::guard('agent')->user()->company_name)->where('isRead',0)->count()>0 ? \App\Models\Notification::where('title', 'like', '%' . 'Open' . '%')->where('user_type',Auth::guard('agent')->user()->company_name)->where('isRead',0)->count() : '' }}</span></a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab9" data-toggle="tab"><i class="fas fa-fw fa-close"></i>Closed Tickets<span class="text-danger" style="margin-left: 5px" >{{ \App\Models\Notification::where('title', 'like', '%' . 'Closed' . '%')->where('user_type',Auth::guard('agent')->user()->company_name)->where('isRead',0)->count()>0 ? \App\Models\Notification::where('title', 'like', '%' . 'Closed' . '%')->where('user_type',Auth::guard('agent')->user()->company_name)->where('isRead',0)->count() : '' }}</span></a></li>
                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab10" data-toggle="tab"><i class="fas fa-fw fa-check"></i>Add New Tickets</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                    <div id="tab8" class="tab-pane fade in active">
                <!-- data table -->
                <div class="table-responsive">
                    <table class="table table-room-type table-bordered" id="openticket-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Ticket</th>
                  <th>Subject</th>
                  <th>Created</th>
                  <th>Status</th>
                  <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                @foreach ($open_tickets as $ticket)
                    <tr>
                        <td class="max-space"># {{ $ticket->ticket_code }}&nbsp;<span class="bg-primary label"></span></td>
                        <td class="min-space">{{ $ticket->subject }}</td>
                        <td class="min-space">{{ $ticket->created_at->format('d/m/Y h:m:s') }}</td>
                        <td class="min-space"><span class="bg-success label">{{ $ticket->status }}</span></td>
                        <td class="min-space">
                            <button  class="icon-reply" style="cursor: pointer;"  data-message-id="{{ $ticket->id }}" id="reply-button" data-toggle="modal" data-target="#modalReply">
                                <i class="material-icons">reply</i>
                            </button>
                        </td>
                    </tr>
                @endforeach


              </tbody>
                    </table>
                </div>
                <!-- /data table -->
                </div>
                <div id="tab9" class="tab-pane fade">
                    <!-- data table -->
                <div class="table-responsive">
                    <table class="table table-room-type table-bordered" id="closeticket-dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>Ticket</th>
                    <th>Subject</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($closed_tickets as $ticket)
                        <tr>
                            <td class="max-space"># {{ $ticket->ticket_code }}&nbsp;<span class="bg-primary label"></span></td>
                            <td class="min-space">{{ $ticket->subject }}</td>
                            <td class="min-space">{{ $ticket->created_at->format('d/m/Y h:m:s') }}</td>
                            <td class="min-space"><span class="bg-danger label">{{ $ticket->status }}</span></td>
                            <td class="min-space">
                                <button  class="icon-reply" style="cursor: pointer;"  data-message-id="{{ $ticket->id }}" id="reply-button" data-toggle="modal" data-target="#modalReply">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

              </tbody>
                    </table>
                </div>
                <!-- /data table -->
                </div>
                    <div id="tab10" class="tab-pane fade">
                        <form id="validate-form" class="row" enctype="multipart/form-data" method="POST" action="{{ route('agent.support-ticket') }}">
                            @csrf
                            <input type="hidden" name="temp_file_selector" id="temp_file_selector" value="{{uniqid()}}">

                            <div class="col-md-6 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Category</label>
                                        <select name="category" id="category" class="inputg" required>
                                            <option value="" selected>Select Category</option>
                                            <option value="Special Request">Special Request</option>
                                            <option value="Send Info To Hotel">Send Info To Hotel</option>
                                            <option value="Clients in Hotel Support">Clients in Hotel Support</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Subject</label>
                                        <input type="text" id="subject" name="subject" value="{{ old('message') }}" class="inputg" placeholder="Place Subject" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Message</label>
                                        <textarea name="message" id="" rows="5" required="" class="inputg" placeholder="Type Message" autocomplete="off" style="min-height: 180px; border: 2px dashed rgba(0, 0, 0, 0.1); padding-left: 15px; padding-right: 15px;">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-3">
                                <button class="btn btn-success" id="submitEvaluation">Send</button>
                            </div>
                        </form>
                    </div>


                </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
  </div>
<!--Profile Admin Area End-->

<div class="modal  modal-reply-message fade" id="modalReply" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Messages</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="messages-container">
                    <!-- Messages will be displayed here -->
                </div>
                <br id="br">
                <textarea id="replyMessage" name="message" class="form-control" placeholder="Type your reply here..."></textarea>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button id="sendReplyBtn" type="button" class="btn" style="color: white; background-color: green"><i class="fas fa-headset m-2"></i>Send</button>
            </div>
        </div>
    </div>
</div>

<div class="modal  modal-reply-message fade" id="modalView" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="bookingModalLabel">Booking Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Booking details here -->
            <p>Booking information and details go here...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Proceed to Payment</button>
          </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        var messageId = 0;
        $('.icon-reply').on('click', function () {
            messageId = $(this).data('message-id');

            $.ajax({
                url: '/get-messages/' + messageId,
                method: 'GET',
                success: function (response) {
                    updateMessages(response.messages);
                    if(response.status === 'Closed'){
                        $('#replyMessage').attr('hidden', true);
                        $('#br').attr('hidden', true);
                        $('#sendReplyBtn').attr('hidden', true);
                    }else{
                        $('#replyMessage').removeAttr('hidden');
                        $('#br').removeAttr('hidden');
                        $('#sendReplyBtn').removeAttr('hidden');
                    }
                },
                error: function (error) {
                    console.error('Error fetching booking details:', error);
                }
            });

            function updateMessages(messages) {
                var container = $('#messages-container');
                container.empty();
                messages.forEach(function (message) {
                    var sender = message.sender === 'مسؤول' ? 'Customer Support' : message.sender;
                    var background = message.sender === 'مسؤول' ? '#D1D1D1' : '#ACACAC';
                    var direction = message.sender === 'مسؤول' ? 'ltr' : 'rtl';
                    var messageHtml = '<input class="form-control" value="' + sender + ': ' + message.message + '" disabled style="min-height:30px; background-color: '+ background +' ;direction: ' + direction + '">';
                    var createdDate = new Date(message.created_at);
                    var formattedDate = createdDate.toLocaleString('en-GB', {
                        day: 'numeric',
                        month: 'numeric',
                        year: 'numeric',
                        hour: 'numeric',
                        minute: 'numeric',
                    });
                    var timeHtml = '<span class="form-control" disabled style="max-height:30px; font-size:10px; ;direction: ' + direction + '">' + formattedDate + '</span>';
                    container.append(messageHtml);
                    container.append(timeHtml);
                });
            }
        });
        $('#sendReplyBtn').on('click', function () {
            var replyMessage = $('#replyMessage').val();

            // Make an AJAX request to send the reply
            $.ajax({
                url: '/agentReply/' + messageId,  // Update the URL to include the ticket ID
                method: 'POST',
                data: {
                    message: replyMessage ,
                    _token: '{{ csrf_token() }}',
                },
                success: function (response) {
                    console.log('Reply sent successfully:', response);
                    $('#replyMessage').val('');
                    $('#modalReply').modal('hide');
                },
                error: function (error) {
                    console.error('Error sending reply:', error);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#agentSelect').change(function() {
            var agentId = $(this).val();
            var url = "{{ route('agents.getMonthlyReport', ':id') }}";
            url = url.replace(':id', agentId);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('.parentDiv').html(' ')
                        $('.parentDiv').append(`
                            <p>Total Amount Of Orders, `+response.month+`</p>
                            <h4>`+response.monthReport+` <span >`+response.currency+`</span></h4>
                        `)
                }
            });
        });
    });
</script>
@endsection
