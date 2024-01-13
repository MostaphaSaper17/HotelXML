@extends('layouts.website')
@section('content')

<div class="clearfix"></div>

    <div class="container-fluid  py-3 hero-header hero-about">
        <div class="container py-3">
            <div class="row justify-content-center py-3">
                <div class="col-lg-10 pt-lg-3 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Hotelsxml</span>
                            <h2>Feel Confident With Us</h2>
                        </div>
                        <div class="text">
                            We are a travel service company, hotel online network booking system online easy to use and more safety
                            It combines old experience and modern tourism cutting edge technology, which are connected to us and many
                            partners around the world and different countries have strong experience in travel markets.
                        </div>
                    <div class="text">
                        We offer the best services for tourism and travel to customers at the level of classes and cultures. Which vary in service in several forms suitable for every choice in different parts of the world. We focus on offering the best prices, offers and services to customers for a pleasant vacation where they are. And we seek to win the satisfaction of customers by proving them through our services of honesty, honesty, and commitment to time.
                    </div>
                        <div class="btn-box">
                            <a href="{{ route('website.contact-us') }}" class="btn btn-primary py-3 px-5 mt-2">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="author-desc">
                            <h2>Hotelsxml</h2>
                            <span>Web Developer</span>
                        </div>
                        <figure class="image-1">
                            <a href="#" class="lightbox-image" data-fancybox="images">
                                <img title="" src="{{ asset('website/images/new-img/2486793.jpg') }}" width="100%">
                            </a>
                        </figure>
                    </div>
                </div>

            </div>
            <div class="sec-title">
                <span class="title">About our work</span>
                <h2>How does it work?</h2>
            </div>
            <div class="text">
                    Hotelsxml, through technology, cuts the prices and availability of the top travel websites and guarantees you to find
                    the best hotel price. You can make your hotel reservations at less cost and quickly With Hotelsxml.
                    You Can make your travel plan anytime, whether during the night or day because we provide 24/7 customer service.
                    Hotelsxml is a great option for you because it is partnered with the globally best hotels in many countries.
                </div>
                <div class="text">
                    <ul>
                        <li>
                            <span class="bold">Hottest Hotels deals:</span>
                            <p>
                                Every hotel brand indeed competes for customers online.
                                We give the hottest hotel deals and provide accommodation for more than 1 million hotels Apartments,
                                and resorts around the world. We believe in the power of extreme personalization and offer the best hotel deals worldwide.
                                Hotelsxml is one of the best platforms to search for a hotel. We provide cheap hotel deals compared to the hundreds of travel
                                websites and save up to 20%.
                            </p>
                        </li>
                        <li>
                            <span class="bold">Develop a Wider World View:</span>
                            <p>
                                If you want to have a broader worldview, it is essential to explore and visit new places, cultures, and people.
                                Don't overthink; book your Hotel online through Hotelsxml and enjoy trips in different biggest countries at lower prices.
                                It includes more than thousands of destination access through one click, for example; New York, Bali, Paris, Dubai, London, Bangkok,
                                Vienna, Italy, Malaysia, Cape Town, Maldives, Germany, Turkey, Hong Kong, and many more.
                            </p>
                        </li>
                        <li>
                            <span class="bold">Search Smarter, Faster & Better Here: </span>
                            <p>
                                You can make online changes anytime if you book online hotels through them.
                                You do not have to wait for the Hotel and the customer service representative to make changes
                                and cancellations to your online reservations. You can also check the hotel deal package, explore
                                pictures of the room, and many other hotel features. Hotelsxml offers the most extensive search
                                results with the right mix of apartments, hotels, and hostels. It is the Hotel's site with a broader
                                range of budgets.

                            </p>
                        </li>
                        <li>
                            <span class="bold">Become your travel agent:</span>
                            <p>
                                One of the most exciting experiences is to become your travel agent.
                                You will be able to plan every single detail by yourself through our Hotelsxml.
                                It allows you to arrange your trip as you desire it to be. You can create an ideal
                                package depending on your budget, dates, and preferences. You do not have to wait for
                                the feedback of the agent for the hotel booking.
                            </p>
                        </li>

                    </ul>
                </div>


            </div>
    </section>

    <div class="clearfix"></div>
@endsection
