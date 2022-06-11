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
                &nbsp;All Pets
            </h3>
            <a href="{{ route('pet.create') }}"
               class="u-active-palette-1-light-2 u-border-3 u-border-active-palette-1-light-2 u-border-hover-palette-1-light-2 u-border-palette-1-light-2 u-btn u-btn-round u-button-style u-custom-font u-font-merriweather u-hover-palette-1-light-2 u-none u-radius-50 u-text-active-white u-text-black u-text-hover-white u-btn-1">
               Add new Pet</a>

            <div class="u-form u-form-1">
                <ul>
                    @forelse($pets as $pet)
                        <li>{{ $pet->name }}</li>
                    @empty
                        <span>no one</span>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>
@endsection
