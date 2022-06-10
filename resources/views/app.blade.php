<!DOCTYPE html>
<html style="font-size: 16px;">

    @include('layout.head')

    <body data-home-page="doctors.html" data-home-page-title="@yield('title')" class="u-body u-xl-mode">

    <header class="u-align-center-xs u-black u-clearfix u-header u-header" id="sec-1547">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="512" data-image-height="512" data-animation-name="customAnimationIn" data-animation-duration="4000" data-animation-direction="">
                <img src="{{ asset('images/daisy.png') }}" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
                    <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-palette-2-dark-1" href="#" style="font-size: calc(1em + 8px);">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-white u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-dark-1 u-text-hover-palette-2-dark-1 u-text-white" href="{{ route('home') }}" style="padding: 6px 36px;">Home</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-white u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-dark-1 u-text-hover-palette-2-dark-1 u-text-white" href="{{ route('doctors') }}" style="padding: 6px 36px;">Doctors</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-white u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-dark-1 u-text-hover-palette-2-dark-1 u-text-white" href="{{ route('hosts') }}" style="padding: 6px 36px;">Hosts</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-white u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-dark-1 u-text-hover-palette-2-dark-1 u-text-white" href="{{ route('contact-us') }}" style="padding: 6px 36px;">Contact us</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-white u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-dark-1 u-text-hover-palette-2-dark-1 u-text-white" href="{{ route('sign_in') }}" style="padding: 6px 36px;">Sign in</a>
                        </li><li class="u-nav-item"><a class="u-border-2 u-border-active-white u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-dark-1 u-text-hover-palette-2-dark-1 u-text-white" href="{{ route('sign_up') }}" style="padding: 6px 36px;">Sign up</a>
                        </li></ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('home') }}">Home</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('doctors') }}">Doctors</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('hosts') }}">Hosts</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('contact-us') }}">Contact us</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('sign_in') }}">Sign in</a>
                                </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('sign_up') }}">Sign up</a>
                                </li></ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <p class="u-custom-font u-font-merriweather u-text u-text-custom-color-2 u-text-default u-text-1">
                <br>Da​isy
            </p>
        </div>
    </header>

        @yield('section')

        @include('layout.footer')

    </body>

</html>
