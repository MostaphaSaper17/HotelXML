@extends('layouts.website')
@section('content')

<div class="clearfix"></div>

<div class="container-fluid  py-3 hero-header">
    <div class="container py-3">
        <div class="row justify-content-center py-3">
            <div class="col-lg-10 pt-lg-3 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">contact us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">contact us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section id="contact">

    <h1 class="section-header">Get in Touch</h1>

    <div class="contact-wrapper">

    <!-- Left contact page -->

  <form id="contact-form" class="form-horizontal" role="form">

    <div class="form-group">
      <div class="col-sm-12">
        <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-12">
        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
      </div>
    </div>

    <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>

    <button class="btn btn-primary send-button d-flex align-items-center justify-content-center gap-2" id="submit" type="submit" value="SEND">
        <i class="fas fa-paper-plane"></i>
        <span class="send-text" style="margin: 0;">SEND</span>

    </button>

  </form>

    <!-- Left contact page -->

    <div class="direct-contact-container">

        <ul class="contact-list">
            <li class="list-item"><i class="fas fa-map-marker fa-2x"><span class="contact-text place">City, State</span></i></li>

            <li class="list-item"><i class="fas fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>
            <li class="list-item"><i class="fas fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li>

            <li class="list-item"><i class="fas fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">hitmeup@gmail.com</a></span></i></li>
            <li class="list-item"><i class="fas fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">hitmeup@gmail.com</a></span></i></li>

        </ul>

      <hr>
        <ul class="social-media-list">
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-github" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-codepen" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-instagram" aria-hidden="true"></i></a>
            </li>
        </ul>

      <hr>

      <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

    </div>

</div>

</section>



<div class="clearfix"></div>

@endsection
