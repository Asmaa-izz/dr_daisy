@extends('app')

@section('title','doctors')
@section('style')
    <link rel="stylesheet" href="{{asset('css/doctors.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-align-left u-clearfix u-white u-section-1" id="sec-de9d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-form u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="custom" name="form-1" style="padding: 15px;">
                    <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-1">
                        <label for="select-ec71" class="u-custom-font u-font-merriweather u-label">Location</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-ec71" name="select-1" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                                <option value="Zamalek">Zamalek</option>
                                <option value="1st Settlement">1st Settlement</option>
                                <option value="2nd Settlement">2nd Settlement</option>
                                <option value="3rd Settlement">3rd Settlement</option>
                                <option value="5th Settlement (New cairo)">5th Settlement (New cairo)</option>
                                <option value="Maadi">Maadi</option>
                                <option value="Garden city">Garden city</option>
                                <option value="Nasr city">Nasr city</option>
                                <option value="Heliopolis">Heliopolis</option>
                                <option value="6th of October City">6th of October City</option>
                                <option value="Downtown">Downtown</option>
                                <option value="Manial">Manial</option>
                                <option value="Haram (Pyramids area)">Haram (Pyramids area)</option>
                                <option value="Mohandiseen">Mohandiseen</option>
                                <option value="El Rehab">El Rehab</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-2">
                        <label for="select-40eb" class="u-custom-font u-font-merriweather u-label">Specialization</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-40eb" name="select" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                                <option value="Item 1">Item 1</option>
                                <option value="Item 2">Item 2</option>
                                <option value="Item 3">Item 3</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-partition-factor-3 u-form-group-3">
                        <label for="text-417f" class="u-custom-font u-font-merriweather u-label">Doctor name</label>
                        <input type="text" placeholder="" id="text-417f" name="name" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        <a href="#" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Filter<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-style u-list-item u-palette-3-light-2 u-radius-10 u-repeater-item u-shape-round u-list-item-1">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <h4 class="u-align-left u-custom-font u-custom-item u-font-merriweather u-text u-text-1">Connor Quinn<br>
                            </h4>
                            <h3 class="u-align-left u-custom-font u-font-lato u-text u-text-2">450 EGP</h3>
                            <h6 class="u-align-left u-custom-font u-custom-item u-font-merriweather u-text u-text-3">-&nbsp; &nbsp;Therapist</h6>
                            <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1080" data-image-height="1080"></div>
                            <p class="u-align-left u-custom-font u-custom-item u-font-merriweather u-large-text u-text u-text-variant u-text-4">"​Sample text for HOSTS to write ​But, while sending messages to your customers can help improve engagement and resolve queries faster, having to manually send individual messages can be extremely time-consuming.&nbsp;</p>
                            <a href="https://nicepage.app" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">View Profile</a>
                            <a href="https://nicepage.app" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Book now</a>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-palette-3-light-2 u-radius-10 u-repeater-item u-shape-round u-list-item-2">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <h4 class="u-align-left u-custom-font u-custom-item u-font-merriweather u-text u-text-5">Connor Quinn<br>
                            </h4>
                            <h3 class="u-align-left u-custom-font u-font-lato u-text u-text-6">350 EGP</h3>
                            <h6 class="u-align-left u-custom-font u-custom-item u-font-merriweather u-text u-text-7"> -&nbsp; &nbsp;Therapist</h6>
                            <div alt="" class="u-image u-image-circle u-image-2" data-image-width="900" data-image-height="933"></div>
                            <p class="u-align-left u-custom-font u-custom-item u-font-merriweather u-large-text u-text u-text-variant u-text-8">"​Sample text for HOSTS to write ​But, while sending messages to your customers can help improve engagement and resolve queries faster, having to manually send individual messages can be extremely time-consuming.&nbsp;</p>
                            <a href="https://nicepage.app" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">View Profile</a>
                            <a href="https://nicepage.app" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
