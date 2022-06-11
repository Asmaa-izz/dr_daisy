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
                <form action="{{ route('pet.store') }}" method="POST"
                      source="custom" name="form" style="padding: 10px;">
                    @csrf
                    <div class="u-form-group u-form-name u-form-partition-factor-3">
                        <label for="name-6aed" class="u-custom-font u-font-merriweather u-label">Pet name</label>
                        <input type="text" placeholder="Enter your Name" id="name-6aed" name="name"
                               class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                               required="">
                    </div>

                    <div class="u-form-group u-form-partition-factor-3 u-form-group-4">
                        <label for="text-ddde" class="u-custom-font u-font-merriweather u-label">Pet birth date</label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-0d23" name="birth_date"
                               class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                    </div>

                    <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-7">
                        <label for="select-85d3" class="u-custom-font u-font-merriweather u-label">Pet breed</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-85d3" name="breed_id"
                                    class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                                    required="required">
                                @foreach($breeds as $breed)
                                <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                                @endforeach
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="u-form-group u-form-select u-form-group-10">
                        <label for="select-d5fc" class="u-custom-font u-font-merriweather u-label">Area</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-d5fc" name="area_id"
                                    class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                                    required="required">
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="u-form-group u-form-name u-form-partition-factor-3">
                        <label for="name-6aed" class="u-custom-font u-font-merriweather u-label">Pet colour</label>
                        <input type="color" placeholder="Enter your colour" id="name-6aed" name="colour"
                               class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                               required="">
                    </div>

                    <div class="u-form-group u-form-name u-form-partition-factor-3">
                        <label for="name-6aed" class="u-custom-font u-font-merriweather u-label">Pet weight</label>
                        <input type="number" placeholder="Enter your weight" id="name-6aed" name="weight"
                               class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                               required="">
                    </div>

                    <div class="u-form-group u-form-select u-form-group-10">
                        <label for="select-d5fc" class="u-custom-font u-font-merriweather u-label">Pet gender</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-d5fc" name="gender"
                                    class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white"
                                    required="required">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="u-align-left u-form-group u-form-submit">
                        <input type="submit" value="Submit" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1">
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
