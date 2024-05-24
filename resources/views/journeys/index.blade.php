@extends('layouts.app')

@section('title', 'Journeys')


@section('content')

    <main>
        <div class="container">
            <h2>Tutti i Treni</h2>
            @include('partials.table', $journeys)
        </div>
    </main>

@endsection
