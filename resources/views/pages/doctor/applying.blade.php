@extends('app')

@section('title','doctor_applying')
@section('style')
    <link rel="stylesheet" href="{{asset('css/doctor_applying.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-clearfix u-section-1" id="sec-6456">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-custom-font u-font-merriweather u-text u-text-default u-text-1">Application information</h3>
            <div class="u-form u-form-1">
                <form action="{{ route('doctors.store') }}" method="POST"
                      class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-name u-form-partition-factor-2">
                        <label for="name-acde" class="u-custom-font u-font-merriweather u-label">Speciality</label>
                        <input type="text" placeholder="Enter your Speciality" id="name-acde" name="speciality" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">
                    </div>
                    <div class="u-form-email u-form-group u-form-partition-factor-2">
                        <label for="email-acde" class="u-custom-font u-font-merriweather u-label">Subspecialities</label>
                        <input type="text" placeholder="Enter your subspecialities" id="email-acde" name="sub_specialities" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-3">
                        <label for="text-84f8" class="u-custom-font u-font-merriweather u-label">Where do you work ?</label>
                        <input type="text" placeholder="" id="text-84f8" name="work" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                        <label for="text-81e1" class="u-custom-font u-font-merriweather u-label">Consultation fee</label>
                        <input type="number" placeholder="" id="text-81e1" name="consultation_fee" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                    </div>
                    <div class="u-form-group u-form-textarea u-form-group-5">
                        <label for="textarea-28a2" class="u-custom-font u-font-merriweather u-label">Insurances</label>
                        <textarea rows="4" cols="50" id="textarea-28a2" name="insurances" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-white" required=""></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">SUBMIT</a>
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
