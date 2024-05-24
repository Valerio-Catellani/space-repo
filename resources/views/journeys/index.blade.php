@extends('layouts.app')

@section('title', 'Journeys')


@section('content')

    <main style="padding-top:150px">
        <div class="container hype-unselectable">
            <h2>Tutti i Viaggi</h2>
            @include('partials.table', $journeys)
        </div>
    </main>

@endsection
