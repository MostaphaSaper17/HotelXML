@extends('layouts.agent')
@section('content')
    <!--Navigation End-->
<div class="clearfix"></div>
<div id="st-content-wrapper " class="search-result-page booking-page-bg booking-en">
    <div class="container">
        <a href="{{ route('agent.hotel-details') }}" class="return-page"><i class="fas fa-arrow-left"></i> Return to rooms option</a>
        <h2 class="main-title "><i class="fas fa-check-circle"></i> Your booking is going to be confirmed in a few steps!</h2>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-7">
                <div class="single-booking-hotel">
                    <div class="informations">
                        <h4 class="title"><i class="fas fa-user"></i> Guest Information</h4>
                        <p class="info-room">
                            <i class="fas fa-bed"></i> Room 1: Deluxe Double Studio (full double bed) for 2 adults (Breakfast included)
                        </p>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="form-area">
                                <label for="guest_name">Guest Name</label>
                                <input type="text" id="guest_name" name="guest_name" class="input-en" placeholder="Enter guest name">
                            </div>
                            <div class="form-area">
                                <label for="guest_last_name">Guest Last Name</label>
                                <input type="text" id="guest_last_name" name="guest_last_name" class="input-en" placeholder="Enter guest last name">
                            </div>
                        </div>

                        <div class="form-area">
                            <label for="special_requests">
                                <span class="bold d-block"><i class="fas fa-exclamation"></i> Special requests if you have?</span>
                                Note: Special Requests are not guaranteed and are subject to availability upon check-in at the hotel. Please get in touch with our Customer Support if you'd like to add guaranteed services.
                            </label>
                            <textarea id="special_requests" name="special_requests" rows="3"></textarea>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="form-area">
                                <label for="phone"> Phone Number</label>
                                <input type="text" id="phone" name="phone" class="input-en" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-area">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="single-booking-hotel">
                    Booking Notes
                </div>

                <div class="single-booking-hotel">
                    <p>Booking Payment method</p>
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <div class="form-area d-flex align-items-center gap-1">
                            <input type="checkbox" id="balance_checkbox" name="balance_checkbox" value="" class="checkbox">
                            <label for="balance_checkbox" class="checkbox-label"> By Balance available 1000 USD</label>
                        </div>
                        <div class="form-area d-flex align-items-center gap-1">
                            <input type="checkbox" id="credit_card_checkbox" name="credit_card_checkbox" value="" class="checkbox">
                            <label for="credit_card_checkbox" class="checkbox-label"> By credit card</label>
                        </div>
                    </div>
                    <div class="form-area d-flex align-items-center gap-1 mb-4">
                        <input type="checkbox" id="accept_terms_checkbox" name="accept_terms_checkbox" value="" class="checkbox">
                        <label for="accept_terms_checkbox" class="checkbox-label"> Yes, I accept the cancellation policy, Booking notes, and Terms & Conditions of Hotelsxml.</label>
                    </div>

                    <button class="btn btn-primary d-flex justify-content-center m-auto">Book now</button>
                </div>
            </div>
            <div class="col-md-5">
                <div class="single-booking-hotel">
                    <div class="item-content-w">
                        <!-- Hotel stars -->
                        <ul class="icon-list icon-group booking-item-rating-stars">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                        <div class="clearfix"></div>
                        <h4 class="service-title">Hyatt Centric Times Square</h4>
                        <p class="single-book-hotel-address"><i class="fas fa-map-marker-alt"></i> 401 7th Avenue, Chelsea, NY 10001, UK.</p>
                        <!-- Facilities -->
                        <ul class="facilities">
                            <li>1 Room, 2 Adults, 1 Night</li>
                            <li>Room: Standard rooms, 2 twin beds, terrace tax recovery charges and fees (2 twin beds).</li>
                            <li> <i class="fa-solid fa-utensils"></i> Breakfast</li>
                            <li><i class="fa-regular fa-calendar-days"></i> Check-In&nbsp;: Jun 27, 2019</li>
                            <li><i class="fa-regular fa-calendar-days"></i> Check-Out&nbsp;: Jul 03, 2019</li>
                        </ul>
                    </div>
                    <div class="policy-en">
                        <h4><i class="fas fa-exclamation-triangle"></i> Cancellation Policy</h4>
                        <ul class="order-style">
                            <li>
                                This is a fully non-refundable booking. No cancellations, or amendments,
                                once it is confirmed. This booking must be made immediately and paid.
                            </li>
                        </ul>
                    </div>

                    <div class="total-price-area-en">
                        <div class="d-flex align-items-end gap-4">
                            <div>
                                <h5>Booking Price</h5>
                                <h5>Payment Total</h5>
                            </div>
                            <h4 class="price">150 <span>USD</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div><!--container end-->
</div><!--search-result-page end-->

@endsection
