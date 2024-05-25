@extends('layouts.app')

@section('title', 'Journeys')


@section('content')
    <div id="solar_sistem">
    </div>
    <main>

        <div class="container hype-unselectable">
            <div class="d-flex justify-content-center mt-3">
                <h2 class="py-4 hype-text-shadow">Tutti i Viaggi</h2>
            </div>
            @include('partials.table', $journeys)
        </div>
    </main>

@endsection
