@extends('layouts.agent')
@section('content')
    <div class="clearfix"></div>
    <div id="st-content-wrapper" style="padding-bottom: 30px;">
        <div class="container">
            <div class="st-hotel-content">
                <div class="st-hotel-header">
                    <div class="left">
                    <div class="st-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="clearfix"></div>
                    <h2 class="st-heading">Hotel Name</h2>
                    <div class="sub-heading">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Marrakesh, Morocco</span>
                        <a href="#!" class="st-link font-medium" data-toggle="modal" data-target="#st-modal-show-map">View on map</a>
                    </div>
                    </div>

                    <div class="right">
                        <div class="center">
                            <div class="service-star-text-review hidden-xs">
                            <p><span class="bold-text">(Total Starts)</span></p>
                            </div>
                            <div class="service-price">
                            <span class="price bold-text">150 <span class="usd">USD</span></span>
                            </div>
                        </div>
                    <div class="select-room-area">
                        <a class="btn-show-price btn btn-primary upper mt5" href="#available_rooms"><i class="fas fa-bed"></i>All Rooms</a>
                    </div>
                    </div>
                    <div class="modal fade modal-map" id="st-modal-show-map" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="input-icon field-icon page-small-icon"><img src="{{ asset('website/images/close-icon.svg') }}" alt=""></i></button>
                            <h4 class="modal-title">Hotel Name</h4>
                        </div>
                        <div class="modal-body">
                            <div class="st-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3473006.9447390377!2d-9.393883143804752!3d31.78116652402345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b88619651c58d%3A0xd9d39381c42cffc3!2sMorocco!5e0!3m2!1sen!2sin!4v1561371930612!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-9 ">
                        <!-- image gallery -->
                        <div class="st-gallery">
                        <div class="fotorama" data-autoplay="true"      data-width="875"  data-nav="thumbs" data-allowfullscreen="true">
                            <a href="images/gallery-img/g-img-1.jpg"><img src="{{ asset('website/images/gallery-img/g-img-1.jpg') }}" alt=""></a>
                            <a href="images/gallery-img/g-img-2.jpg"><img src="{{ asset('website/images/gallery-img/g-img-2.jpg') }}" alt=""></a>
                            <a href="images/gallery-img/g-img-3.jpg"><img src="{{ asset('website/images/gallery-img/g-img-3.jpg') }}" alt=""></a>
                            <a href="images/gallery-img/g-img-4.jpg"><img src="{{ asset('website/images/gallery-img/g-img-4.jpg') }}" alt=""></a>
                            <a href="images/gallery-img/g-img-5.jpg"><img src="{{ asset('website/images/gallery-img/g-img-5.jpg') }}" alt=""></a>
                            <a href="images/gallery-img/g-img-6.jpg"><img src="{{ asset('website/images/gallery-img/g-img-6.jpg') }}" alt=""></a>
                            <a href="images/gallery-img/g-img-7.jpg"><img src="{{ asset('website/images/gallery-img/g-img-7.jpg') }}" alt=""></a>
                        </div>
                        </div>
                        <!-- image gallery end -->
                        <!-- tabs start -->
                        <div id="available_rooms" class="st-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="room-availability-li active"><a href="#room-availability-tab" aria-controls="room-availability-tab" role="tab" data-toggle="tab"><i class="fas fa-bed"></i> Available rooms</a></li>
                                <li role="presentation" class="description-li"><a href="#description-tab" aria-controls="description-tab" role="tab" data-toggle="tab"><i class="fas fa-info-circle"></i> Description</a></li>
                                <li role="presentation" class="facilities-li"><a href="#facilities-tab" aria-controls="facilities-tab" role="tab" data-toggle="tab"><i class="fas fa-building"></i> Facilities</a></li>
                                <li role="presentation" class="map-display-li"><a href="#map-display-tab" aria-controls="map-display-tab" role="tab" data-toggle="tab"><i class="fas fa-map-marked-alt"></i> Map</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane " id="description-tab">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 col-sm-push-9 col-md-4 col-md-push-8 hotel-logo">
                                            <img src="{{ asset('website/images/gallery-img/g-img-1.jpg') }}" class="img-responsivve"> </div>
                                        <div class="col-xs-12 col-sm-9 col-sm-pull-3 col-md-8 col-md-pull-4">
                                            <div class="st-description" data-toggle-section="st-description"
                                                data-show-all="st-description" data-height="120" style="height: 120px;">
                                                <p>Located in the Shinsaibashi area, Hotel WBF Hommachi is the ideal point of
                                                    departure for your excursions in Osaka. With its location just from the city
                                                    center and from the airport, this 3-star property attracts numerous
                                                    travelers each year. With its convenient location, the property offers easy
                                                    access to the city’s must-see destinations.</p>
                                                <p>Hotel WBF Hommachi offers many facilities to enrich your stay in Osaka.
                                                    Guests can enjoy on-site features like free Wi-Fi in all rooms, daily
                                                    housekeeping, laundromat, wheelchair accessible, 24-hour front desk.</p>
                                                <p>Hotel WBF Hommachi is home to 182 guestrooms. All are tastefully furnished,
                                                    and many even provide such comforts as towels, carpeting, clothes rack,
                                                    slippers, flat screen television. The property’s host of recreational
                                                    offerings ensures you have plenty to do during your stay. Hotel WBF Hommachi
                                                    is an ideal place of stay for travelers seeking charm, comfort, and
                                                    convenience in Osaka.</p>
                                                <div class="cut-gradient"></div>
                                            </div>
                                            <a href="#" class="st-link block" data-show-target="st-description" data-text-less="View Less" data-text-more="View More"><span class="text">View More</span><i class="fas fa-caret-down ml3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="facilities-tab">
                                    <div class="facilities" data-toggle-section="st-facilities" data-show-all="st-facilities"
                                        data-height="150" style="height: 150px;">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="item has-matchHeight" style="height: 27px;">
                                                    <i class="input-icon field-icon facility-icon"><img src="{{ asset('website/images/room-service/ac-icon.svg') }}" alt=""></i>Air Conditioning</div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="item has-matchHeight" style="height: 27px;">
                                                    <i class="input-icon field-icon facility-icon"><img src="{{ asset('website/images/room-service/parking-icon.png') }}" alt=""></i>Airport Transport</div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="item has-matchHeight" style="height: 27px;">
                                                    <i class="input-icon field-icon facility-icon"><img src="{{ asset('website/images/room-service/waist-icon.png') }}" alt=""></i>Fitness Center</div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="item has-matchHeight" style="height: 27px;">
                                                    <i class="input-icon field-icon facility-icon"><img src="{{ asset('website/images/room-service/television -icon.png') }}" alt=""></i>Flat Tv</div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="item has-matchHeight" style="height: 27px;">
                                                    <i class="input-icon field-icon facility-icon"><img src="{{ asset('website/images/room-service/heater-icon.svg') }}" alt=""></i>Heater</div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <div class="item has-matchHeight" style="height: 27px;">
                                                    <i class="input-icon field-icon facility-icon"><img src="{{ asset('website/images/room-service/wifi-icon.png') }}" alt=""></i>Internet – Wifi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="st-link block" data-show-target="st-facilities"
                                        data-text-less="Show Less" data-text-more="Show All"><span class="text">Show All</span>
                                        <i class="fas fa-caret-down ml3"></i></a>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="map-display-tab">
                                    <div class="row">
                                        <div class="col-md-12">Coming Soon</div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="room-availability-tab">
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-checked-in d-flex align-items-center justify-content-between">
                                            <div class="d-flex gap-5">
                                                <div class="form-group form-date-field form-date-search clearfix  has-icon d-flex align-items-center  gap-1"
                                                    data-format="DD/MM/YYYY">
                                                    <i class="far fa-calendar-alt input-icon field-icon"></i>
                                                    <div class="date-wrapper clearfix">
                                                        <div class="check-in-wrapper d-flex align-items-center gap-1 ">
                                                            <label>Check In</label>
                                                            <div class="inputg check-in-render">01/07/2019</div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                                    <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                                </div>
                                                <div class="form-group form-date-field form-date-search clearfix  has-icon d-flex align-items-center gap-1 " data-format="DD/MM/YYYY">
                                                    <i class="fas fa-calendar-check"></i>
                                                    <div class="date-wrapper clearfix">
                                                        <div class="check-in-wrapper d-flex align-items-center gap-1">
                                                            <label>Check Out</label>
                                                            <div class="inputg check-out-render">02/07/2019</div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                                    <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                                </div>



                                            </div>

                                            <button class="btn btn-primary change">Change</button>
                                        </div>

                                        <div class="box-filter d-flex align-items-center gap-4">
                                            <div class="form-area">
                                                <input type="text" id="" name="" value="" class="inputg" placeholder="Search By Room Type">
                                            </div>
                                            <div class="form-area d-flex align-items-center gap-1">
                                                <input type="checkbox" id="" name="" value="" class="checkbox" >

                                                <label for=""> Breakfast included</label>
                                            </div>
                                            <div class="form-area d-flex align-items-center gap-1">
                                                <input type="checkbox" id="" name="" value="" class="checkbox" >

                                                <label for=""> Free cancellation</label>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-room-type table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Room Type</th>
                                                        <th>Meal</th>
                                                        <th>Cancellation</th>
                                                        <th>Total Price</th>
                                                        <th>Book Now</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="max-space"><i class="fas fa-bed"></i> Double Room</td>
                                                        <td class="min-space"><i class="fas fa-utensils"></i> Breakfast included</td>
                                                        <td class="min-space"><i class="fas fa-check"></i> Free cancellation, 20 Sep  <p>Pay Later</p></td>
                                                        <td class="min-space bold-text price"> <p class="price">100 <span>USD</span></p> </td>
                                                        <td class="min-space"><a class="btn-show-price btn btn-primary upper"  href="{{ route('agent.booking-info') }}" > Book Now</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="max-space"><i class="fas fa-bed"></i> Single Room</td>
                                                        <td class="min-space"><i class="fas fa-times"></i> No meal</td>
                                                        <td class="min-space"><i class="fas fa-times"></i> Non-refundable <p>Pay Now</p></td>
                                                        <td class="min-space bold-text price"> <p class="price">80 <span>USD</span></p> </td>
                                                        <td class="min-space"><a class="btn-show-price btn btn-primary upper"  href="{{ route('agent.booking-info') }}" > Book Now</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="max-space"><i class="fas fa-bed"></i> Suite</td>
                                                        <td class="min-space"><i class="fas fa-utensils"></i> Full board</td>
                                                        <td class="min-space"><i class="fas fa-check"></i> Free cancellation, 20 Sep  <p>Pay Later</p></td>
                                                        <td class="min-space bold-text "> <p class="price">200 <span>USD</span></p> </td>
                                                        <td class="min-space"><a class="btn-show-price btn btn-primary upper"  href="{{ route('agent.booking-info') }}" > Book Now</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabs end -->
                    </div>
                    <div class="col-xs-12 col-md-3 ">
                        <div class="summary-box">
                            <h4><i class="fas fa-calendar-alt"></i> Booking Summary</h4>
                            <ul>
                                <li><i class="fas fa-bed"></i> 1 Room, 2 Adults, 0 Children.</li>
                                <li><span><i class="far fa-calendar-check"></i> Check-in&nbsp;:</span> 05/07/2019</li>
                                <li><span><i class="far fa-calendar-times"></i> Check-out&nbsp;:</span> 06/07/2019</li>
                                <li><i class="far fa-moon"></i> 1 Night</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
