@extends('app')

@section('title','pet_details')
@section('style')
    <link rel="stylesheet" href="{{asset('css/pet_details.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-clearfix u-section-1" id="sec-e4ae">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-custom-font u-font-merriweather u-text u-text-1">
                <span class="u-file-icon u-icon">
                    <img src="{{ asset('images/6462524.png') }}" alt="">
                </span>
                &nbsp;Add new pet
            </h3>
            <div class="u-form u-form-1">
                <form action="{{ route('pet.store') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                      source="custom" name="form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-name u-form-partition-factor-3">
                        <label for="name-6aed" class="u-custom-font u-font-merriweather u-label">Pet name</label>
                        <input type="text" placeholder="Enter your Name" id="name-6aed" name="name"
                               class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                               required="">
                    </div>

                    <div class="u-form-group u-form-partition-factor-3 u-form-group-4">
                        <label for="text-ddde" class="u-custom-font u-font-merriweather u-label">Pet age</label>
                        <input type="text" placeholder="Enter your pets age" id="text-ddde" name="input"
                               class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                    </div>

                    <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-7">
                        <label for="select-85d3" class="u-custom-font u-font-merriweather u-label">Pet breed</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-85d3" name="select"
                                    class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                                    required="required">
                                <option value="Cat">Cat</option>
                                <option value="Dog">Dog</option>
                                <option value="Bird">Bird</option>
                                <option value="Fish">Fish</option>
                                <option value="Hamster">Hamster</option>
                                <option value="Rabbit">Rabbit</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="u-form-group u-form-select u-form-group-10">
                        <label for="select-d5fc" class="u-custom-font u-font-merriweather u-label">Area</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-d5fc" name="select_area"
                                    class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                                    required="required">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#"
                           class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1"
                           data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                           data-animation-direction="">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success">Details sent successfully</div>
                    <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors
                        then try again.
                    </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
        </div>
    </section>
@endsection
