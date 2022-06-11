@extends('app')

@section('title','hosts')
@section('style')
    <link rel="stylesheet" href="{{asset('css/hosts.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-align-left u-clearfix u-white u-section-1" id="sec-f126">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-form u-form-1">
                <form action="{{ route('hosts') }}" method="GET" class="" source="custom" name="form-1" style="padding: 15px;">
                    <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-1">
                        <label for="select-ec71" class="u-custom-font u-font-merriweather u-label">Area</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-ec71" name="area" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}" {{ $area_select == $area->id ? 'selected' : '' }} >{{ $area->name }}</option>
                                @endforeach
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-2">
                        <label for="text-417f" class="u-custom-font u-font-merriweather u-label">Host name</label>
                        <input type="text" value="{{ $name }}" id="text-417f" name="name" class="u-border-1 u-border-grey-30 u-custom-font u-font-merriweather u-input u-input-rectangle u-radius-10 u-white">
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        <input type="submit" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1" value="Filter">
                    </div>

                </form>
            </div>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @foreach($hosts as $host)
                    <div class="u-align-center u-container-style u-list-item u-palette-3-light-2 u-radius-10 u-repeater-item u-shape-round u-list-item-2">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <h4 class="u-align-left u-custom-font u-custom-item u-font-merriweather u-text u-text-6">{{ $host->user->name }}<br>
                            </h4>
                            <h3 class="u-align-left u-custom-font u-font-lato u-text u-text-7">{{ $host->hosting_fee }} EGP</h3>
                            <h6 class="u-align-left u-custom-font u-custom-item u-font-merriweather u-text u-text-8"> -&nbsp; &nbsp;{{ $host->area->name }}</h6>
                            <div alt="" class="u-image u-image-circle u-image-2" data-image-width="900" data-image-height="933"></div>
                            <p class="u-align-left u-custom-font u-font-merriweather u-text u-text-9">Per night</p>
                            <p class="u-align-left u-custom-font u-custom-item u-font-merriweather u-large-text u-text u-text-variant u-text-10">"​Sample text for HOSTS to write ​But, while sending messages to your customers can help improve engagement and resolve queries faster, having to manually send individual messages can be extremely time-consuming.&nbsp;</p>
                            <a href="{{ route('profile.user', $host->user->id) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-4">View Profile</a>
                            <a href="#" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-custom-item u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-5">Book now</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
