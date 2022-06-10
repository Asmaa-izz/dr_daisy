@extends('app')

@section('title','sign_up')
@section('style')
    <link rel="stylesheet" href="{{asset('css/sign_up.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-align-center u-clearfix u-image u-section-1" src="" id="sec-9db8" data-image-width="1600" data-image-height="742">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-body-color u-title u-text-1">SIGN UP</h1>
            <div class="u-form u-radius-10 u-white u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email" name="form" style="padding: 28px;">
                    <div class="u-form-email u-form-group">
                        <label for="email-4c18" class="u-custom-font u-font-merriweather u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-4c18" name="email" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="">
                    </div>
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
                        <label for="name-0d84" class="u-custom-font u-font-merriweather u-label">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-0d84" name="name" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="">
                    </div>
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
                        <label for="name-5a7d" class="u-custom-font u-font-merriweather u-label">Password</label>
                        <input type="text" placeholder="Enter your Password" id="name-5a7d" name="password" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="">
                    </div>
                    <div class="u-form-address u-form-group u-form-group-4">
                        <label for="address-93c2" class="u-custom-font u-font-merriweather u-label">Address</label>
                        <input type="text" placeholder="Enter your address" id="address-93c2" name="address" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-5">
                        <label for="phone-c289" class="u-custom-font u-font-merriweather u-label">Phone</label>
                        <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-c289" name="phone" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-6">
                        <label for="phone-e024" class="u-custom-font u-font-merriweather u-label">National ID</label>
                        <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your national ID number " id="phone-e024" name="ssn" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="">
                    </div>
                    <div class="u-form-date u-form-group u-form-group-7">
                        <label for="date-0d23" class="u-custom-font u-font-merriweather u-label">Birth Date</label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-0d23" name="bdate" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-8">
                        <label for="select-1842" class="u-custom-font u-font-merriweather u-label">Select</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-1842" name="select" class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10" required="required">
                                <option value="Pet owner">Pet owner</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Host">Host</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                    </div>
                    <div class="u-form-agree u-form-group u-form-group-9">
                        <input type="checkbox" id="agree-7749" name="agree" class="u-agree-checkbox" required="">
                        <label for="agree-7749" class="u-custom-font u-font-merriweather u-label">I accept the <a href="#">Terms of Service</a>
                        </label>
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        <a href="#" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Continue<br>
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
