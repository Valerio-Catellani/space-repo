@extends('layouts.app')

@section('title', 'Journeys')


@section('content')

    <main>
        <div class="container hype-unselectable">
            <h2 class="py-4">Tutti i Viaggi</h2>
            @include('partials.table', $journeys)
        </div>
    </main>

@endsection
