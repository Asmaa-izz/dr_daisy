@extends('app')

@section('title','profile')
@section('style')
    <link rel="stylesheet" href="{{secure_asset('css/profile.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_e04a" data-image-width="1980"
             data-image-height="1320">
        <div
            class="u-clearfix u-sheet u-valign-bottom-sm u-valign-bottom-xs u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
            <h2 class="u-custom-font u-font-merriweather u-text u-text-1">Profile</h2>
            <p class="u-custom-font u-font-merriweather u-large-text u-text u-text-variant u-text-2">I'm a creative
                webdeveloper</p>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h4 class="u-custom-font u-font-merriweather u-text u-text-3">Details</h4>
                                <p class="u-custom-font u-font-merriweather u-text u-text-4">
                                    <span style="font-weight: 700;">Name: </span>
                                    <br>{{ $user->name }}<br>
                                    <span style="font-weight: 700;">Age: </span>
                                    <br>{{ $age }} years <span style="font-weight: 700;">
                      <br>Location:
                    </span>
                                    <br>{{ $user->address ?? "" }}<br><b>Contact information: </b>
                                    <br>{{ $user->email }}<br>{{ $user->phone }}
                                </p>
                            </div>
                        </div>
                        <div
                            class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-22 u-layout-cell-2">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <h4 class="u-custom-font u-font-merriweather u-text u-text-5">About me</h4>
                                <p class="u-custom-font u-font-merriweather u-text u-text-6">I am an allround web
                                    designer.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>
                                <a href="https://nicepage.me"
                                   class="u-active-palette-1-light-2 u-border-3 u-border-active-palette-1-light-2 u-border-hover-palette-1-light-2 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-2 u-none u-radius-50 u-text-active-white u-text-black u-text-hover-white u-btn-1">Book
                                    Now</a>
                            </div>
                        </div>
                        <div
                            class="u-align-center u-container-style u-layout-cell u-palette-1-light-2 u-size-18 u-layout-cell-3">
                            <div class="u-container-layout u-container-layout-3">
                                <div class="u-image u-image-circle u-preserve-proportions u-image-1" alt=""
                                     data-image-width="700" data-image-height="774"></div>
                                <h3 class="u-custom-font u-font-merriweather u-text u-text-7"> Hello, I'm {{ $user->name }}</h3>
                                <p class="u-custom-font u-font-merriweather u-text u-text-8"> I am a versatile graphic
                                    designer who can approach marketing projects from concept to implementation. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
