@extends('app')

@section('title','confirm_booking')
@section('style')
    <link rel="stylesheet" href="{{asset('css/confirm_booking.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-clearfix u-section-1" id="sec-8675">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h3 class="u-custom-font u-font-merriweather u-text u-text-default u-text-1">Edit Profile</h3>
            <div class="u-form u-form-1">
                <form method="POST" action="{{ route('profile.update', $user->id) }}"
                      class=""
                      style="padding: 28px;">
                    @csrf

                    <div class="u-form-email u-form-group">
                        <label for="email-4c18" class="u-custom-font u-font-merriweather u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-4c18" name="email" value="{{$user->email}}"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('email') is-invalid @enderror"
                               required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
                        <label for="name-0d84" class="u-custom-font u-font-merriweather u-label">Name</label>
                        <input type="text" placeholder="Enter your Name" id="name-0d84" name="name" value="{{$user->name}}}"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('name') is-invalid @enderror"
                               required autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="u-form-address u-form-group u-form-group-4">
                        <label for="address-93c2" class="u-custom-font u-font-merriweather u-label">Address</label>
                        <input type="text" placeholder="Enter your address" id="address-93c2" name="address" value="{{$user->address}}"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('address') is-invalid @enderror"
                               required autocomplete="address">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-5">
                        <label for="phone-c289" class="u-custom-font u-font-merriweather u-label">Phone</label>
                        <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                               placeholder="Enter your phone (e.g. +14155552675)" id="phone-c289" name="phone" value="{{$user->phone}}"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('phone') is-invalid @enderror"
                               required autocomplete="phone">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-6">
                        <label for="phone-e024" class="u-custom-font u-font-merriweather u-label">National ID</label>
                        <input type="tel"
                               {{--                               pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"--}}
                               placeholder="Enter your national ID number " id="phone-e024" name="ssn" value="{{$user->ssn}}"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('ssn') is-invalid @enderror"
                               required autocomplete="ssn">
                        @error('ssn')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="u-form-date u-form-group u-form-group-7">
                        <label for="date-0d23" class="u-custom-font u-font-merriweather u-label">Birth Date</label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-0d23" name="birth_date" value="{{$user->birth_date}}"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('birth_date') is-invalid @enderror"
                               required autocomplete="birth_date">
                        @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="u-align-right u-form-group u-form-submit">
                        <input type="submit" class="u-active-palette-1-light-1 u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-1 u-palette-1-light-2 u-radius-10 u-btn-1" value="enter">
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
