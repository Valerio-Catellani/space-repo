@extends('layouts.app')

@section('title', 'Journeys')


@section('content')
    {{-- <div id="Show_solar_sistem" role="button" style="position: relative; bottom: 50px; left: 90%">Show Solar Sistem</div> --}}
    <main id="all-journeys">
        <div id="solar_sistem"></div>
        <div class="gradient-in"></div>
        <div class="container hype-unselectable">
            <div class="d-flex justify-content-center mt-3">
                <h2 class="py-4 hype-text-shadow">Tutti i Viaggi</h2>
            </div>
            @include('partials.table', $journeys)
        </div>
    </main>

@endsection
