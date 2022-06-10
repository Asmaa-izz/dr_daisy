@extends('app')

@section('title','contact_us')
@section('style')
    <link rel="stylesheet" href="{{secure_asset('css/contact_us.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-clearfix u-section-1" id="sec-8d8f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-text-1">Contact us</h1>
            <div class="u-form u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                    <div class="u-form-group u-form-name">
                        <label for="name-292e" class="u-custom-font u-font-merriweather u-label">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-292e" name="name" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">
                    </div>
                    <div class="u-form-email u-form-group">
                        <label for="email-292e" class="u-custom-font u-font-merriweather u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-292e" name="email" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">
                    </div>
                    <div class="u-form-group u-form-message">
                        <label for="message-292e" class="u-custom-font u-font-merriweather u-label">Message</label>
                        <textarea placeholder="Enter your message" rows="4" cols="50" id="message-292e" name="message" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-white" required=""></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
        </div>
    </section>
@endsection
