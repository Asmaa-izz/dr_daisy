@extends('app')

@section('title','confirm_booking')
@section('style')
    <link rel="stylesheet" href="{{asset('css/confirm_booking.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-clearfix u-section-1" id="sec-8675">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-custom-font u-font-merriweather u-text u-text-default u-text-1">Booking confirmation</h3>
            <div class="u-form u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                    <div class="u-form-group u-form-name">
                        <label for="name-f135" class="u-custom-font u-font-merriweather u-label">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-f135" name="name" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">
                    </div>
                    <div class="u-form-email u-form-group">
                        <label for="email-f135" class="u-custom-font u-font-merriweather u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-f135" name="email" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-3">
                        <label for="select-5569" class="u-custom-font u-font-merriweather u-label">Available date</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-5569" name="available-date" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="required">
                                <option value="Item 1">Item 1</option>
                                <option value="Item 2">Item 2</option>
                                <option value="Item 3">Item 3</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                    </div>
                    <div class="u-form-agree u-form-group u-form-group-4">
                        <input type="checkbox" id="agree-cee8" name="agree" class="u-agree-checkbox" required="">
                        <label for="agree-cee8" class="u-custom-font u-font-merriweather u-label">I accept the <a href="#">Terms of Service</a>
                        </label>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                        <a href="#" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">CONFIRM BOOKING<br>
                        </a>
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
