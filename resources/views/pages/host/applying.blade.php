@extends('app')

@section('title','host_applying')
@section('style')
    <link rel="stylesheet" href="{{asset('css/host_applying.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-clearfix u-section-1" id="sec-8fd0">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-custom-font u-font-merriweather u-text u-text-default u-text-1">Application information</h3>
            <div class="u-form u-form-1">
                <form action="{{ route('hosts.store') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                    @csrf
{{--                    <div class="u-form-group u-form-name">--}}
{{--                        <label for="name-6aed" class="u-custom-font u-font-merriweather u-label">Name</label>--}}
{{--                        <input type="text" placeholder="Enter your Name" id="name-6aed" name="name" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">--}}
{{--                    </div>--}}
{{--                    <div class="u-form-email u-form-group">--}}
{{--                        <label for="email-6aed" class="u-custom-font u-font-merriweather u-label">National ID</label>--}}
{{--                        <input type="email" placeholder="Enter your National ID" id="email-6aed" name="input" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">--}}
{{--                    </div>--}}
{{--                    <div class="u-form-address u-form-group u-form-group-3">--}}
{{--                        <label for="address-5ca1" class="u-custom-font u-font-merriweather u-label">Full Address</label>--}}
{{--                        <input type="text" placeholder="Enter your full address" id="address-5ca1" name="address" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">--}}
{{--                    </div>--}}
                    <div class="u-form-group u-form-group-4">
                        <label for="text-2a30" class="u-custom-font u-font-merriweather u-label">Hosting fee</label>
                        <input type="text" placeholder="" id="text-2a30" name="hosting_fee" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="required">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-5">
                        <label for="select-d5fc" class="u-custom-font u-font-merriweather u-label">Area</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-d5fc" name="area_id" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="required">
                                @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
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
