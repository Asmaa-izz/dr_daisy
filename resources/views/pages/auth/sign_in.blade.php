@extends('app')

@section('title','sign_in')
@section('style')
    <link rel="stylesheet" href="{{asset('css/sign_in.css')}}" media="screen">
@endsection

@section('section')
    <section class="u-align-center-sm u-align-center-xs u-clearfix u-section-1" id="carousel_6375">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-rotation-parent u-rotation-parent-1">
                <div class="u-flip-horizontal u-rotate-90 u-shape u-shape-svg u-text-custom-color-2 u-shape-1">
                    <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b1ce"></use></svg>
                    <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-b1ce" style="enable-background:new 0 0 160 160;"><path d="M10.3,39.9c-18.2,24.9-9.2,62.5,4,87.4c8.2,15.4,23,36.1,48.6,32.2c5.8-0.9,11.1-3.2,16.9-4.3c17.8-3.4,37.9,4.7,54.5-1.5
	c6.6-2.5,11.6-6.9,15.5-11.8c12.2-15.3,13.7-35.6,3.8-51.9c-6.9-11.5-19-20.9-23.6-33.1c-4.5-11.9-1.4-24.9-4.7-37.1
	C121.1,5,103.7-5.6,85.7,3.1c-6.8,3.3-12.6,7.7-20,10.2C58,15.9,49.5,16.6,41.6,19C26.8,23.6,16.7,31,10.3,39.9z"></path></svg>
                </div>
            </div>
            <div class="u-align-left u-image u-image-circle u-image-1" data-image-width="4967" data-image-height="2490"></div>
            <div class="u-expanded-width-xs u-form u-radius-10 u-white u-form-1">
                <form method="POST" action="{{ route('login') }}" style="padding: 28px;">
                    @csrf
                    <div class="u-form-email u-form-group">
                        <label for="email-4c18" class="u-custom-font u-font-merriweather u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-4c18" name="email"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="u-form-group u-form-name u-form-group-2">
                        <label for="name-5a7d" class="u-custom-font u-font-merriweather u-label">Password</label>
                        <input type="password" placeholder="Enter your Password" id="name-5a7d" name="password"
                               class="u-border-2 u-border-grey-5 u-custom-font u-font-merriweather u-grey-5 u-input u-input-rectangle u-radius-10 @error('password') is-invalid @enderror"
                               required autocomplete="current-password">
                        @error('password')
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


    <script>
    </script>
@endsection
