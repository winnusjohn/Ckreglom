@extends('user/app') 

@section('main-content')
<div class="map-area mt-30">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.677215153837!2d3.3235189141504984!3d6.686846223099503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b968ef7730477%3A0x37bb43fddbe28894!2sCHRIST%20THE%20KING%20RESCUE%20GLOBAL%20MINISTRY!5e0!3m2!1sen!2sbd!4v1573094774526!5m2!1sen!2sbd"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<!-- ##### Google Maps End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-content-area">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="contact-content contact-information">
                                <h4>Contact</h4>
                                <p>info@ckreglom.org</p>
                                <p>(+234) 803-5143-807</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="contact-content contact-information">
                                <h4>Address</h4>
                                <p>Address:119, Akute-ijoko Road, Opp Yewande Junction, Giwa B/stop, Oke-Aro, Agbado
                                    Ogun State</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="contact-content contact-information">
                                <h4>Opening Hours</h4>
                                <p>Mon-Sat: 10 Am to 6 Pm</p>
                                <p>Sunday: open</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->


<!-- ##### Contact Form Area Start ##### -->
<div class="contact-form section-padding-0-100 py-5">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading">
                    <h2>Leave A Message</h2>
                    <p>Your email address will not be published. Required fields are marked.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Contact Form Area -->
                <div class="contact-form-area">
                  @if (Session::has('flash_message'))
                      <div class="alert alert-success"> {{ Session::get('flash_message') }}</div>
                  @endif
                    @include('includes.messages')
                    <form action="{{ route('contactus.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-name">Full Name*:</label>
                                    <input type="text" class="form-control" id="contact-name" name="name"
                                        placeholder="Full Name" required>
                                        {{-- @if ($errors->has('name'))
                                            <small class="form-text alert alert-danger">{{$errors->first('name') }}</small>
                                        @endif --}}
                                        
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-email">Email*:</label>
                                    <input type="email" class="form-control" id="contact-email" name="email"
                                        placeholder="info.deercreative@gmail.com" required>
                                     {{-- @if ($errors->has('email'))
                                        <small class="form-text alert alert-danger">{{$errors->first('email') }}</small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-number">Phone*:</label>
                                    <input type="text" class="form-control" id="contact-number" name="phone"
                                        placeholder="(+234) 803-5143-807" required>
                                        {{-- @if ($errors->has('phone'))
                                        <small class="form-text alert alert-danger">{{$errors->first('phone') }}</small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="contact-number">Subject*:</label>
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject" required>
                                        {{-- @if ($errors->has('subject'))
                                        <small class="form-text alert alert-danger">{{$errors->first('subject') }}</small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message">Message*:</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"
                                        placeholder="Message" required></textarea>
                                        {{-- @if ($errors->has('message'))
                                        <small class="form-text alert alert-danger">{{$errors->first('message') }}</small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn crose-btn mt-15">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Contact Form Area End ##### -->
@endsection