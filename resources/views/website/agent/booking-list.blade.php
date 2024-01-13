@extends('layouts.agent')
@section('content')
<div class="clearfix"></div>
    <div id="st-content-wrapper" class="search-result-page">
        <div class="container">
            <div class="clearfix"></div>
            <!--Top Horizontal Search-->
            <div class="change-search-goggle-area mobile-page-special-gap">
                <div class="row">
                <div class="col-md-12">
                    <h2><span class="special-green-color">My Bookings -</span> Manage your booking with advance filters!</h2>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="search-form-wrapper horizontal-search-area my-booking-search-box ">
                <div class="search-form hotel-service my-custom-container">
                    <!--Address-->
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Booking ID</label>
                                        <input type="text" id="booking-id" name="booking-id" value="" class="inputg" placeholder="Enter Booking ID" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Guest Name</label>
                                        <input type="text" id="guest-name" name="guest-name" value="" class="inputg" placeholder="Place guest name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-destination">
                                    <div class="dropdown">
                                        <label for="booking-status">Booking Status</label>
                                        <select name="booking-status" id="booking-status" class="form-control" required>
                                            <option value="all" selected>All</option>
                                            <option value="complete">Complete</option>
                                            <option value="confirm">Confirm</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-extra-field dropdown clearfix field-destination">
                                    <div class="dropdown">
                                        <label for="check-in-status">Check In Status</label>
                                        <select name="check-in-status" id="check-in-status" class="form-control" required>
                                            <option value="all" selected>All</option>
                                            <option value="past">Past Check Ins</option>
                                            <option value="future">Future Check Ins</option>
                                            <option value="active-stay">Active Stay</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 mobile-hide-hr">
                                <hr>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-3 border-right">
                                <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Booking From Date</label>
                                            <div id="booking-from" class="inputg check-in-render">DD/MM/YYYY</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                    <input type="text" class="check-in-out" value="" name="date">
                                </div>
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Booking To Date</label>
                                            <div  id="booking-to" class="inputg check-out-render">DD/MM/YYYY</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out" value="" name="date">
                                </div>
                            </div>
                            <div class="col-md-3 border-right">
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Check In</label>
                                            <div  id="check-in-date" class="inputg check-out-render">DD/MM/YYYY</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out" value="" name="date">
                                </div>
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Check Out</label>
                                            <div id="check-out-date" class="inputg check-out-render">DD/MM/YYYY</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out" value="" name="date">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Cancellation Date From</label>
                                            <div id="cancellation-date-from" class="inputg check-in-render">DD/MM/YYYY</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                    <input type="text" class="check-in-out" value="" name="date">
                                </div>
                                <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                    data-format="DD/MM/YYYY">
                                    <i class="input-icon field-icon fas fa-calendar"></i>
                                    <div class="date-wrapper clearfix">
                                        <div class="check-in-wrapper">
                                            <label>Cancellation Date To</label>
                                            <div id="cancellation-date-to" class="inputg check-out-render">DD/MM/YYYY</div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                    <input type="text" class="check-in-out" value="" name="date">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <button class="btn btn-primary btn-search full-width-btn mt20" type="button" id="search-button">
                                    <i class="fas fa-search"></i> Search
                                </button>
                                <button class="btn btn-warning btn-search full-width-btn mt20" type="button" id="reset-button">
                                    <i class="fas fa-sync-alt"></i> Reset
                                </button>
                            </div>
                        </div>
                </div>
            </div>

            <div class="clearfix"></div>
                    <div class="change-search-goggle-area special-mar-30">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Booking List</h2>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--Booking List Table-->
                    <div class="table-responsive ">
                        <table class="table my-booking-list-table custom-table-style ">
                            <tbody class="filter-table">
                                <tr>
                                    <th><i class="fas fa-id-card"></i> Booking Id</th>
                                    <th><i class="fas fa-check-circle"></i> Status</th>
                                    <th><i class="fas fa-user"></i> Guest Name</th>
                                    <th><i class="fas fa-calendar"></i> Check-in</th>
                                    <th><i class="fas fa-map-marker-alt"></i> City</th>
                                    <th><i class="far fa-clock"></i> Cancellation Deadline</th>
                                    <th><i class="fas fa-dollar-sign"></i> Cost Total</th>
                                    <th><i class="fas fa-credit-card"></i> Payment</th>
                                    <th><i class="fas fa-cogs"></i> Action</th>
                                </tr>
                                @foreach ($agent_bookings as $booking)
                                    <tr class="filter-div">
                                        <td class="min-space bold-text">{{ $booking->booking_reference_id }}</td>
                                        @if ($booking->booking_status == 'complete')
                                            <td class="min-space"><span class="text-success label bol">Complete</span></td>
                                        @elseif ($booking->booking_status == 'confirm')
                                            <td class="min-space"><span class="text-warning label">Confirm</span></td>
                                        @else
                                            <td class="min-space"><span class="text-danger label">Cancle</span></td>
                                        @endif
                                        <td class="min-space">{{ $booking->guest_names }}</td>
                                        <td class="min-space">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $booking->check_in_date)->format('d/m/Y') }}</td>
                                        <td class="min-space">{{ $booking->city }}</td>
                                        <td class="min-space" style="font-weight:bold;"> {{ $booking->refund_date ? 'free cancle to: '.\Carbon\Carbon::createFromFormat('Y-m-d', $booking->refund_date)->format('d/m/Y') : 'Non Refundable' }}</td>
                                        <td class="min-space"><b>{{ $booking->agent_price }} <span>{{ $booking->agent_currency }}</span></b></td>
                                        @if ($booking->booking_status == 'complete')
                                            <td class="min-space"><span class="text-success label bol">Paid</span></td>
                                        @else
                                            <td class="min-space"><span class="text-danger label">Unpaid</span></td>
                                        @endif
                                        <td class="min-space" style="width: 150px">
                                            <button title="Show" class="icon-reply" style="cursor: pointer;"  data-booking-id="{{ $booking->booking_reference_id }}"  data-toggle="modal" data-target="#showBooking" >
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            @if($booking->booking_status == 'complete' && $booking->cancellation_policy == 'non_refundable' || $booking->booking_status == 'complete' && $booking->refund_date < now()->format('Y-m-d'))
                                                <button title="Support" class="icon-reply support-ticket" style="cursor: pointer;"  data-booking-id="{{ $booking->booking_reference_id }}"  data-toggle="modal" data-target="#SupportBooking" >
                                                    <i class="fas fa-headset"></i>
                                                </button>
                                            @elseif ($booking->booking_status == 'complete' && $booking->refund_date > now()->format('Y-m-d'))
                                                <button title="Cancel" class="icon-reply" style="cursor: pointer;"  data-booking-id="{{ $booking->booking_reference_id }}"  data-toggle="modal" data-target="#cancelBooking" >
                                                    <i class="fas fa-fw fa-close"></i>
                                                </button>
                                                <button title="Support" class="icon-reply support-ticket" style="cursor: pointer;"  data-booking-id="{{ $booking->booking_reference_id }}"  data-toggle="modal" data-target="#SupportBooking" >
                                                    <i class="fas fa-headset"></i>
                                                </button>
                                            @elseif ($booking->booking_status == 'confirm')
                                                <button title="Pay" class="icon-reply" style="cursor: pointer;"  data-booking-id="{{ $booking->booking_reference_id }}"  data-toggle="modal" data-target="#PayBooking" >
                                                    <i class="fas fa-credit-card"></i>
                                                </button>
                                                <button title="Cancel" class="icon-reply" style="cursor: pointer;"  data-booking-id="{{ $booking->booking_reference_id }}"  data-toggle="modal" data-target="#cancelBooking" >
                                                    <i class="fas fa-fw fa-close"></i>
                                                </button>
                                                <button title="Support" class="icon-reply support-ticket" style="cursor: pointer;"  data-booking-id="{{ $booking->booking_reference_id }}"  data-toggle="modal" data-target="#SupportBooking" >
                                                    <i class="fas fa-headset"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
            <!--Top Horizontal Search End-->
            <div class="clearfix"></div>
        </div>
        <!--container end-->

        <!-- Popup Statements-->
        <div class="modal fade modal-map show-statements-modal-pop-box" id="st-modal-show-statements" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="input-icon field-icon page-small-icon"><img src="{{ asset('website/images/close-icon.svg') }}"
                                    alt=""></i></button>
                        <h4 class="modal-title">Download Historical Statement</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Agent</label>
                                        <input type="text" id="" name="" value="" class="inputg" placeholder="Code"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Type</label>
                                        <select name="" id="" class="inputg" required="">
                                            <option value="">Select Type</option>
                                            <option value="Booking">Booking</option>
                                            <option value="Transaction">Transaction</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mobile-hide-hr"><hr></div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 border-right">
                                <div class="search-form-wrapper mobile-form-gap">
                                <div class="search-form horizontal-search-area">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                            <i class="input-icon field-icon"><img src="{{ asset('website/hotel-support/images/calandar-icon.png') }}" alt=""></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">

                                                    <label>Specific Date</label>
                                                    <div class="inputg check-in-render">Place Specific Date</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"><h5 class="sp-mar-20">OR</h5></div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mobile-hide-hr"><hr></div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 border-right">
                                <div class="search-form-wrapper mobile-form-gap">
                                    <div class="search-form horizontal-search-area">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                            <i class="input-icon field-icon"><img src="{{ asset('website/hotel-support/images/calandar-icon.png') }}" alt=""></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">

                                                    <label>Date Range From</label>
                                                    <div class="inputg check-in-render">Place Date Range From</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="search-form-wrapper mobile-form-gap">
                                    <div class="search-form horizontal-search-area">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                            <i class="input-icon field-icon"><img src="{{ asset('website/hotel-support/images/calandar-icon.png') }}" alt=""></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">

                                                    <label>Date Range To</label>
                                                    <div class="inputg check-in-render">Place Date Range To</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>
                                        </div>
                                        </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mobile-hide-hr"><hr></div>
                            <div class="clearfix"></div>

                            <div class="col-md-4 border-right">
                                <div class="form-group form-extra-field dropdown clearfix field-detination">
                                    <div class="dropdown">
                                        <label>Download Format</label>
                                        <select name="" id="" class="inputg" required="">
                                            <option value="PDF">PDF</option>
                                            <option value="Print">Print</option>
                                            <option value="Excel">Excel</option>
                                        </select>

                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4 border-right">
                                <button class="btn btn-success btn-search full-width-btn mt20" type="submit">Fetch Statement</button>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-danger btn-search full-width-btn mt20" type="submit">Cancel</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup Statements End-->

        <div class="modal  modal-reply-message fade" id="InfoModal" role="dialog">
            <div class="modal-dialog" role="document" style="width: 60%;height: 30%">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookingModalLabel">Info</h5>
                        </button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <label id="InfoModalLabel" style="font-weight: bold;font-size: 250%" for=""></label>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn close-modal" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black'; this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black'; this.style.borderColor='#CCCCCC'">
                            <i class="fa-solid fa-xmark"></i> Close and Reload
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal  modal-reply-message fade" id="SupportBooking" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Messages</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex" style="" id="errors">

                        </div>
                        <br id="br">
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-between" style="" id="category-subject-container-label">

                        </div>
                        <br id="br">
                    </div>
                    <div class="modal-body">
                        <div class="d-flex" style="" id="category-subject-container">

                        </div>
                        <br id="br">
                    </div>
                    <div class="modal-body">
                        <div id="messages-container">
                            <!-- Messages will be displayed here -->
                        </div>
                        <br id="br">
                        <textarea id="replyMessage" name="message" style="margin-left: 5% ; width:90% ;" class="form-control" placeholder="Type your request here..."></textarea>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button id="sendReplyBtn" type="button" class="btn" style="color: white; background-color: green"><i class="fas fa-headset m-2"></i>Send</button>
                    </div>
                </div>
            </div>
        </div>>

        <div class="modal  modal-reply-message fade" id="PayBooking" role="dialog">
            <div class="modal-dialog" role="document" style="width: 50%;height: 30%">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookingModalLabel">Pay</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <label id="PaymentModalTotalCost" style="font-weight: bold;font-size: 150%" for=""></label>
                    </div>
                    <div class="modal-footer pay-buttons d-flex justify-content-center">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal  modal-reply-message fade" id="cancelBooking" role="dialog">
            <div class="modal-dialog" role="document" style="width: 50%;height: 30%">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookingModalLabel">Cancel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <label id="" style="font-weight: bold;font-size: 150%" for="">Do You Want To Cancel This Booking ?</label>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <span class="text-danger">If you choosed Cancel, The Action Cannot Be Rolled Back</span>
                    </div>
                    <div class="modal-footer cancel-buttons d-flex justify-content-center">

                    </div>
                </div>
            </div>
        </div>

        <!-- Show Modal-->
            <div class="modal  modal-form-home fade" id="showBooking" role="dialog">
                <div class="modal-dialog" style="background-color: rgb(255, 255, 255)">
                    <div class="modal-content" style="background-color: rgb(236, 233, 233)">
                    <div class="modal-header pt-2">
                        <h5 class="modal-title d-flex justify-content-center p-2" id="bookingModalLabel">Booking Details</h5>
                        <button type="button btn-danger" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Booking ID</label><br>
                                        <label style="color: rgb(0, 0, 0); font-weight: bold;" id="booking_id" for=""></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group booking-status">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Agent Email</label><br>
                                        <label style="color: #1d1f95; text-decoration: underline" id="agent_email" for=""></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Invoice ID</label><br>
                                        <label style="color: rgb(0, 0, 0);" id="" for="">-</label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Date On</label><br>
                                        <label style="color: #000000" id="created_at" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group payment_status">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Total Price</label><br>
                                        <label style="color: #000000; font-weight: bolder" id="Total_Price" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Hotel ID / HCN</label><br>
                                        <label style="color: #000000;" id="Confirmation_Number" for=""></label><br>
                                    </div>
                                </div>
                                <hr style="background-color: blue; height: 2px; border: none;">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Check In Date</label><br>
                                        <label style="color: black; font-weight: bold" id="check_in_date" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Check Out Date</label><br>
                                        <label style="color: black; font-weight: bold " id="check_out_date" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Nights</label><br>
                                        <label style="color: black ;font-weight: bold" id="nights" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Rooms</label><br>
                                        <label style="color: black ;font-weight: bold" id="rooms" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Adult Number</label><br>
                                        <label style="color: black; font-weight: bold" id="adult_number" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Children Number</label><br>
                                        <label style="color: black; font-weight: bold" id="children_number" for=""></label><br>
                                    </div>
                                </div>
                                <hr style="background-color: black; height: 2px; border: none;">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Hotel Name</label><br>
                                        <label style="color: black; font-weight: bold" id="Hotel_Name" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Country</label><br>
                                        <label style="color: rgb(0, 0, 0)" id="Country" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">City</label><br>
                                        <label style="color: black" id="City" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Room Types</label><br>
                                        <label style="color: black; font-weight: bold" id="room_types" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Room Meal</label><br>
                                        <label style="color: black; font-weight: bold" id="Room_Meal" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Guest Name</label><br>
                                        <label style="color: black" id="guest_name" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nationality</label><br>
                                        <label style="color: black" id="nationality" for=""></label><br>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group cancellation-policy">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group cancel-deadline">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer buttons d-flex justify-content-center">

                    </div>
                </div>
            </div>
        <!-- Show Modal End-->

    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#InfoModal').modal({
                show: false,
                backdrop: 'static',
                keyboard: false
            });

            $('#search-button').on('click', function () {
                var formData = {
                    booking_id: $('#booking-id').val(),
                    guest_name: $('#guest-name').val(),
                    booking_status: $('#booking-status').val(),
                    check_in_status: $('#check-in-status').val(),
                    booking_from: $('#booking-from').text(),
                    booking_to: $('#booking-to').text(),
                    check_in_date: $('#check-in-date').text(),
                    check_out_date: $('#check-out-date').text(),
                    cancellation_date_from: $('#cancellation-date-from').text(),
                    cancellation_date_to: $('#cancellation-date-to').text(),
                };

                $.ajax({
                    type: 'GET',
                    url: '/bookingsFilter/',
                    data: formData,
                    success: function (data) {
                        var tbody = $('.filter-table');
                        var bookings = data.books;
                        console.log(typeof bookings);
                        tbody.empty();
                        tbody.append(`
                            <tr>
                                <th><i class="fas fa-id-card"></i> Booking Id</th>
                                <th><i class="fas fa-check-circle"></i> Status</th>
                                <th><i class="fas fa-user"></i> Guest Name</th>
                                <th><i class="fas fa-calendar"></i> Check-in</th>
                                <th><i class="fas fa-map-marker-alt"></i> City</th>
                                <th><i class="far fa-clock"></i> Cancellation Deadline</th>
                                <th><i class="fas fa-dollar-sign"></i> Cost Total</th>
                                <th><i class="fas fa-credit-card"></i> Payment</th>
                                <th><i class="fas fa-cogs"></i> Action</th>
                            </tr>
                        `);
                        bookings.forEach(function(booking) {
                            console.log(booking);
                            var cla = 'text-danger';
                            var payment_class = 'text-danger';
                            var payment = 'Unpaid';
                            var book_status = 'Cancel';
                            if(booking.booking_status === 'complete'){
                                book_status = 'Complete';
                                payment = 'Paid';
                                cla = 'text-success'
                                payment_class = 'text-success'
                            }else if(booking.booking_status === 'confirm'){
                                book_status = 'Confirm';
                                cla = 'text-warning'
                                payment_class = 'text-danger';
                                payment = 'Unpaid';
                            }

                            var formatteRefundDate;
                            if(booking.refund_date){
                                var originalRefundDate = booking.refund_date;
                                formatteRefundDate = new Date(originalRefundDate).toLocaleDateString('en-GB');
                            }

                            var buttons;
                            var show_button = `
                                <button title="Show" class="icon-reply" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#showBooking" >
                                    <i class="fa-solid fa-eye"></i>
                                </button>` ;

                            var support_button = `
                                <button title="Support" class="icon-reply support-ticket" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#SupportBooking" >
                                        <i class="fas fa-headset"></i>
                                </button>
                            `;

                            var pay_button = `
                                <button title="Pay" class="icon-reply" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#PayBooking" >
                                        <i class="fas fa-credit-card"></i>
                                </button>
                            `;

                            var cancel_button = `
                                <button title="Cancel" class="icon-reply" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#cancelBooking" >
                                        <i class="fas fa-fw fa-close"></i>
                                </button>
                            `;

                            if (booking.booking_status === 'complete') {
                                if (booking.cancellation_policy === 'non_refundable' || new Date(booking.refund_date) < new Date()) {
                                    buttons = `${show_button} ${support_button}`;
                                } else if (new Date(booking.refund_date) > new Date()) {
                                    buttons = `${show_button} ${cancel_button} ${support_button}`;
                                }
                            } else if (booking.booking_status === 'confirm') {
                                buttons = `${show_button} ${pay_button} ${cancel_button} ${support_button}`;
                            }else{
                                buttons = `${show_button}`;
                            }

                            var originalDate = booking.check_in_date;
                            var formattedDate = new Date(originalDate).toLocaleDateString('en-GB');

                            var row = `
                            <tr>
                                <td class="min-space bold-text">${booking.booking_reference_id}</td>
                                <td class="min-space bold-text"><span class="${cla}" style="font-weight:bold;">${book_status}</span></td>
                                <td class="min-space">${booking.guest_names}</td>
                                <td class="min-space">${formattedDate}</td>
                                <td class="min-space">${booking.city}</td>
                                <td class="min-space" style="font-weight:bold;">${(booking.refund_date ? 'Free Cancel to ' + formatteRefundDate + ' ' : 'Non-Refundable')}</td>
                                <td class="min-space bold-text">${booking.total_price}`+' '+` ${data.currency}</td>
                                <td class="min-space bold-text"><span class="${payment_class}" style="font-weight:bold;">${payment}</span></td>
                                <td class="min-space" style="width: 150px">
                                    `+buttons+`
                                </td>
                            </tr>
                        `;

                            tbody.append(row);
                        });
                    },
                    error: function (error) {
                        console.error('Ajax request failed: ', error);
                    }
                });
            });

            $('#reset-button').on('click', function () {
                var formData = {
                    booking_id: '',
                    guest_name: '',
                    booking_status: 'all',
                    check_in_status: 'all',
                    booking_from: 'DD/MM/YYYY',
                    booking_to: 'DD/MM/YYYY',
                    check_in_date: 'DD/MM/YYYY',
                    check_out_date: 'DD/MM/YYYY',
                    cancellation_date_from: 'DD/MM/YYYY',
                    cancellation_date_to: 'DD/MM/YYYY',
                };

                $.ajax({
                    type: 'GET',
                    url: '/bookingsFilter/',
                    data: formData,
                    success: function (data) {
                        $('#booking-id').val('');
                        $('#guest-name').val('');
                        $('#booking-status').val('all');
                        $('#check-in-status').val('all');
                        $('#booking-from').text('DD/MM/YYYY');
                        $('#booking-to').text('DD/MM/YYYY');
                        $('#check-in-date').text('DD/MM/YYYY');
                        $('#check-out-date').text('DD/MM/YYYY');
                        $('#cancellation-date-from').text('DD/MM/YYYY');
                        $('#cancellation-date-to').text('DD/MM/YYYY');
                        var tbody = $('.filter-table');
                        var bookings = data.books;
                        console.log(typeof bookings);
                        tbody.empty();
                        tbody.append(`
                            <tr>
                                <th><i class="fas fa-id-card"></i> Booking Id</th>
                                <th><i class="fas fa-check-circle"></i> Status</th>
                                <th><i class="fas fa-user"></i> Guest Name</th>
                                <th><i class="fas fa-calendar"></i> Check-in</th>
                                <th><i class="fas fa-map-marker-alt"></i> City</th>
                                <th><i class="far fa-clock"></i> Cancellation Deadline</th>
                                <th><i class="fas fa-dollar-sign"></i> Cost Total</th>
                                <th><i class="fas fa-credit-card"></i> Payment</th>
                                <th><i class="fas fa-cogs"></i> Action</th>
                            </tr>
                        `);
                        bookings.forEach(function(booking) {
                            console.log(booking);
                            var cla = 'text-danger';
                            var payment_class = 'text-danger';
                            var payment = 'Unpaid';
                            var book_status = 'Cancel';
                            if(booking.booking_status === 'complete'){
                                book_status = 'Complete';
                                payment = 'Paid';
                                cla = 'text-success'
                                payment_class = 'text-success'
                            }else if(booking.booking_status === 'confirm'){
                                book_status = 'Confirm';
                                cla = 'text-warning'
                                payment_class = 'text-danger';
                                payment = 'Unpaid';
                            }

                            var formatteRefundDate;
                            if(booking.refund_date){
                                var originalRefundDate = booking.refund_date;
                                formatteRefundDate = new Date(originalRefundDate).toLocaleDateString('en-GB');
                            }

                            var buttons;
                            var show_button = `
                                <button title="Show" class="icon-reply" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#showBooking" >
                                    <i class="fa-solid fa-eye"></i>
                                </button>` ;

                            var support_button = `
                                <button title="Support" class="icon-reply support-ticket" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#SupportBooking" >
                                        <i class="fas fa-headset"></i>
                                </button>
                            `;

                            var pay_button = `
                                <button title="Pay" class="icon-reply" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#PayBooking" >
                                        <i class="fas fa-credit-card"></i>
                                </button>
                            `;

                            var cancel_button = `
                                <button title="Cancel" class="icon-reply" style="cursor: pointer;"  data-booking-id="${booking.booking_reference_id}"  data-toggle="modal" data-target="#cancelBooking" >
                                        <i class="fas fa-fw fa-close"></i>
                                </button>
                            `;

                            if (booking.booking_status === 'complete') {
                                if (booking.cancellation_policy === 'non_refundable' || new Date(booking.refund_date) < new Date()) {
                                    buttons = `${show_button} ${support_button}`;
                                } else if (new Date(booking.refund_date) > new Date()) {
                                    buttons = `${show_button} ${cancel_button} ${support_button}`;
                                }
                            } else if (booking.booking_status === 'confirm') {
                                buttons = `${show_button} ${pay_button} ${cancel_button} ${support_button}`;
                            }else{
                                buttons = `${show_button}`;
                            }

                            var originalDate = booking.check_in_date;
                            var formattedDate = new Date(originalDate).toLocaleDateString('en-GB');

                            var row = `
                            <tr>
                                <td class="min-space bold-text">${booking.booking_reference_id}</td>
                                <td class="min-space bold-text"><span class="${cla}" style="font-weight:bold;">${book_status}</span></td>
                                <td class="min-space">${booking.guest_names}</td>
                                <td class="min-space">${formattedDate}</td>
                                <td class="min-space">${booking.city}</td>
                                <td class="min-space" style="font-weight:bold;">${(booking.refund_date ? 'Free Cancel to ' + formatteRefundDate + ' ' : 'Non-Refundable')}</td>
                                <td class="min-space bold-text">${booking.total_price}`+' '+` ${data.currency}</td>
                                <td class="min-space bold-text"><span class="${payment_class}" style="font-weight:bold;">${payment}</span></td>
                                <td class="min-space" style="width: 150px">
                                    `+buttons+`
                                </td>
                            </tr>
                        `;

                            tbody.append(row);
                        });
                    },
                    error: function (error) {
                        console.error('Ajax request failed: ', error);
                    }
                });
            });

            $(document).on('click','.icon-reply',function() {
                var bookingId = $(this).data('booking-id');
                $('#category-subject-container').empty();
                $('#category-subject-container-label').empty();
                $('#errors').empty();
                // Perform an AJAX request to fetch booking details by ID
                $.ajax({
                    url: '/get-booking-details/' + bookingId, // Replace with your actual route
                    method: 'GET',
                    success: function (response) {
                        var original_check_in_date = response.check_in_date;
                        var formatted_check_in_date = new Date(original_check_in_date).toLocaleDateString('en-GB');
                        var original_check_out_date = response.check_out_date;
                        var formatted_check_out_date = new Date(original_check_out_date).toLocaleDateString('en-GB');
                        $('#booking_id').text(response.booking_id);
                        $('#agent_email').text(response.agent_email);
                        $('#agent_currency').text(response.agent_currency);
                        $('#created_at').text(response.created_at);
                        $('#check_in_date').text(formatted_check_in_date);
                        $('#check_out_date').text(formatted_check_out_date);
                        $('#nights').text(response.nights);
                        $('#rooms').text(response.rooms);
                        $('#children_number').text(response.children_number);
                        $('#adult_number').text(response.adult_number);
                        $('#guest_name').text(response.guest_name);
                        $('#room_types').text(response.room_types);
                        $('#Hotel_Name').text(response.Hotel_Name);
                        $('#Room_Meal').text(response.Room_Meal);
                        $('#Country').text(response.Country);
                        $('#City').text(response.City);
                        $('#nationality').text(response.nationality);
                        $('#Confirmation_Number').text(response.Confirmation_Number);
                        $('#Total_Price').text(response.Total_Price);
                        $('#PaymentModalTotalCost').text('Total Price: ' + response.Total_Price);
                        $('#Cancellation_Policy').text(response.Cancellation_Policy);

                        $('.pay-buttons').html(`
                            <button type="button" class="btn pay-buttons-balance" data-booking-id="${response.booking_id}" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black'; this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black'; this.style.borderColor='#CCCCCC'">
                                <i class="fa-solid fa-file-invoice-dollar m-2"></i>Via Balance
                            </button>
                            <<button type="button" class="btn pay-buttons-credit" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'">
                                <i class="fa-solid fa-credit-card m-2"></i>Via Credit Card
                            </button>
                        `);

                        $('.cancel-buttons').html(`
                            <button type="button" class="btn confirm-cancel-button" data-booking-id="${response.booking_id}" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#660000'; this.style.color='white'; this.style.borderColor='rgb(0,0,0)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black'; this.style.borderColor='#CCCCCC'">
                                <i class="fa-solid fa-thumbs-up m-2"></i></i>Yes, Cancel
                            </button>
                            <<button type="button" class="btn" data-dismiss="modal" aria-label="Close" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'">
                                <i class="fa-solid fa-share m-2"></i>No, Return
                            </button>
                        `);

                        if(response.Refund_Date){
                            var originalRefund_Date = response.Refund_Date;
                            var formattedRefund_Date = new Date(originalRefund_Date).toLocaleDateString('en-GB');

                            $('.cancel-deadline').html(`
                                <label id="" for="">Cancel Deadline</label><br>
                                <label style="color:green; font-weight: bold" id="" for="">`+formattedRefund_Date+`</label><br>
                            `);

                            $('.cancellation-policy').html(`
                                <label for="">Cancellation Policy</label><br>
                                <label style="color: green; font-weight: bold" id="Cancellation_Policy" for="">Refundable</label><br>
                            `);

                        }else{
                            $('.cancel-deadline').html(`
                                <label id="" for="">Cancel Deadline</label><br>
                                <label style="color:red; font-weight: bold" id="" for="">Fully Charge</label><br>
                            `);

                            $('.cancellation-policy').html(`
                                <label for="">Cancellation Policy</label><br>
                                <label style="color: red; font-weight: bold" id="Cancellation_Policy" for="">Non Refundable</label><br>
                            `);
                        }

                        if(response.payment_status === 'Paid'){
                            $('.payment_status').html(`
                                <label for="">Payment Status</label><br>
                                <label style="color: green; font-weight: bold" for="">`+ response.payment_status +`</label><br>
                            `);
                        }else{
                            $('.payment_status').html(`
                                <label for="">Payment Status</label><br>
                                <label style="color: Blue; font-weight: bold" for="">`+ response.payment_status +`</label><br>
                            `);
                        }

                        if(response.Booking_Status === 'complete'){
                            $('.booking-status').html(`
                                <label for="">Status</label><br>
                                <label style="color: green; font-weight: bold;" id="" for="">Complete</label><br>
                            `);
                        }else if(response.Booking_Status === 'confirm'){
                            $('.booking-status').html(`
                                <label for="">Payment Status</label><br>
                                <label style="color: orange; font-weight: bold" for="">Confirm</label><br>
                            `);
                        }else{
                            $('.booking-status').html(`
                                <label for="">Payment Status</label><br>
                                <label style="color: red; font-weight: bold" for="">Cancel</label><br>
                            `);
                        }

                        if (response.Booking_Status === 'complete') {
                            if (response.Cancellation_Policy === 'non_refundable' || new Date(response.Refund_Date) < new Date()) {
                                $('.buttons').html(`
                                    <a href="#" type="button" class="btn" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'"><i class="fa-solid fa-print m-2"></i>Voucher</a>
                                    <a href="#" type="button" class="btn" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'"><i class="fa-solid fa-file-invoice-dollar m-2"></i>Invoice</a>
                                    <button type="button" class="btn close-show-modal support-ticket" data-booking-id="${response.booking_id}" data-toggle="modal" data-target="#SupportBooking" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'">
                                        <i class="fas fa-headset m-2"></i>Support
                                    </button>
                                `);
                            } else if (new Date(response.Refund_Date) > new Date()) {
                                $('.buttons').html(`
                                    <a href="#" type="button" class="btn" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'"><i class="fa-solid fa-print m-2"></i>Voucher</a>
                                    <a href="#" type="button" class="btn" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'"><i class="fa-solid fa-file-invoice-dollar m-2"></i>Invoice</a>
                                    <button type="button" class="btn close-show-modal support-ticket" data-booking-id="${response.booking_id}" data-toggle="modal" data-target="#SupportBooking" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'">
                                        <i class="fas fa-headset m-2"></i>Support
                                    </button>
                                    <button type="button" class="btn close-show-modal" data-booking-id="${response.booking_id}" data-toggle="modal" data-target="#cancelBooking" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black'; this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black'; this.style.borderColor='#CCCCCC'">
                                        <i class="fas fa-fw fa-close m-2"></i>Cancel
                                    </button>
                                `);
                            }
                        } else if (response.Booking_Status === 'confirm') {
                            $('.buttons').html(`
                                    <button type="button" class="btn close-show-modal" data-booking-id="${response.booking_id}" data-toggle="modal" data-target="#PayBooking" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black'; this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black'; this.style.borderColor='#CCCCCC'">
                                        <i class="fa-solid fa-file-invoice-dollar m-2"></i>Pay
                                    </button>
                                    <a href="#" type="button" class="btn" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'"><i class="fa-solid fa-print m-2"></i>Voucher</a>
                                    <button type="button" class="btn close-show-modal support-ticket" data-booking-id="${response.booking_id}" data-toggle="modal" data-target="#SupportBooking" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black';this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black';this.style.borderColor='#CCCCCC'">
                                        <i class="fas fa-headset m-2"></i>Support
                                    </button>
                                    <button type="button" class="btn close-show-modal" data-booking-id="${response.booking_id}" data-toggle="modal" data-target="#cancelBooking" style="border-style: solid; border-color: #CCCCCC; color: black; background-color: white; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#CCC'; this.style.color='black'; this.style.borderColor='rgb(90,90,90)'" onmouseout="this.style.backgroundColor='white'; this.style.color='black'; this.style.borderColor='#CCCCCC'">
                                        <i class="fas fa-fw fa-close m-2"></i>Cancel
                                    </button>
                                `);
                        } else if (response.Booking_Status === 'cancelled') {
                            $('.buttons').html(``);
                        }
                    },
                    error: function (error) {
                        console.error('Error fetching booking details:', error);
                    }
                });
            });


            $(document).on('click','.close-modal',function() {
                $('#InfoModal').modal('hide');
                location.reload();
            });

            $(document).on('click','.close-show-modal',function() {
                $('#showBooking').modal('hide');
            });

            $(document).on('click','.pay-buttons-balance',function() {
                var bookingId = $(this).data('booking-id');
                $.ajax({
                    url: '/pay-booking-balance/' + bookingId, // Replace with your actual route
                    method: 'GET',
                    success: function (response) {
                        $('#PayBooking').modal('hide');
                        $('#InfoModal').modal('show');
                        $('#InfoModalLabel').text(response.message);
                    },
                    error: function (error) {

                    }
                });
            });

            $(document).on('click','.confirm-cancel-button',function() {
                var bookingId = $(this).data('booking-id');
                $.ajax({
                    url: '/confirm-cancel-booking/' + bookingId, // Replace with your actual route
                    method: 'GET',
                    success: function (response) {
                        console.log(response.message);
                        $('#cancelBooking').modal('hide');
                        $('#InfoModal').modal('show');
                        $('#InfoModalLabel').text(response.message);
                    },
                    error: function (error) {

                    }
                });
            });

            $(document).on('click','.pay-buttons-credit',function() {
                $('#PayBooking').modal('hide');
                $('#InfoModal').modal('show');
                $('#InfoModalLabel').text('Soon!');
            });

            var messageId = 0;
            var bookingId = 0;
            var container = $('#messages-container');
            $(document).on('click','.support-ticket',function() {
                // Step.1: Get The Booking Reference Number
                bookingId = $(this).data('booking-id');
                // Step.2: Check if the booking opened a ticket before
                $.ajax({
                    url: '/check-booking-support/' + bookingId, // Replace with your actual route
                    method: 'GET',
                    success: function (response) {
                        container.empty();
                        if(response.message == 'Found'){
                            messageId = response.ticket.id;
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
                        }
                        else{
                            messageId = 0;
                            $('#category-subject-container').append(`
                                <input class="form-control" value="`+bookingId+`" disabled style="height: 3%; width: 50%; margin-left: 3%;margin-right: 3%;margin-top: -2%">
                                <select name="category" id="category" style="height: 10%; width: 50%; margin-left: 3%;margin-right: 3%;margin-top: -2%" required>
                                    <option value="" selected>Select Category</option>
                                    <option value="Special Request">Special Request</option>
                                    <option value="Send Info To Hotel">Send Info To Hotel</option>
                                    <option value="Clients in Hotel Support">Clients in Hotel Support</option>
                                    <option value="Others">Others</option>
                                </select>
                            `)

                            $('#category-subject-container-label').append(`
                                <label style=" width: 50%; margin-left: 3%; margin-right: 3%;"> Subject:</label>
                                <label style=" width: 50%; margin-left: 3%; margin-right: 3%;"> Category:</label>
                            `)

                            $('#replyMessage').removeAttr('hidden');
                            $('#br').removeAttr('hidden');
                            $('#sendReplyBtn').removeAttr('hidden');
                            console.log(response.message);
                        }
                    },
                    error: function (error) {

                    }
                });

                function updateMessages(messages) {
                    messages.forEach(function (message) {
                        var sender = message.sender === 'مسؤول' ? 'Customer Support' : message.sender;
                        var background = message.sender === 'مسؤول' ? '#D1D1D1' : '#ACACAC';
                        var direction = message.sender === 'مسؤول' ? 'ltr' : 'rtl';
                        var messageHtml = '<input class="form-control" value="' + sender + ': ' + message.message + '" disabled style="min-height:30px;margin-left: 5%;width:90%; background-color: '+ background +' ;direction: ' + direction + '">';
                        var createdDate = new Date(message.created_at);
                        var formattedDate = createdDate.toLocaleString('en-GB', {
                            day: 'numeric',
                            month: 'numeric',
                            year: 'numeric',
                            hour: 'numeric',
                            minute: 'numeric',
                        });
                        var timeHtml = '<span class="form-control" disabled style="max-height:30px; font-size:10px; margin-left: 5% ; width:90% ;direction: ' + direction + '">' + formattedDate + '</span>';
                        container.append(messageHtml);
                        container.append(timeHtml);
                    });
                }
            });

            $('#sendReplyBtn').on('click', function () {
                var replyMessage = $('#replyMessage').val();
                var category = $('#category').val();

                $.ajax({
                    url: '/agentReply/' + messageId,
                    method: 'POST',
                    data: {
                        subject: bookingId,
                        category: category ,
                        message: replyMessage ,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (response) {
                        if(response.error){
                            $('#errors').empty();
                            $('#errors').append(`
                                <label style=" width: 50%; margin-left: 3%; margin-right: 3%;"> <span class="text-danger">`+response.error+`</span></label>
                            `)
                        }else{
                            console.log('Reply sent successfully:', response);
                            $('#replyMessage').val('');
                            $('#SupportBooking').modal('hide');
                            container.empty();
                        }
                    },
                    error: function (error) {
                        console.error('Error sending reply:', error);
                    }
                });
            });
        });
    </script>
@endsection
