@extends('layouts.app')

@section('title', 'Journeys')


@section('content')
<div id="solar_sistem" style="padding-top:50px">edwee</div>
    <main style="padding-top:150px" >
        
        <div class="container hype-unselectable">
            <h2 class="py-4">Tutti i Viaggi</h2>
            @include('partials.table', $journeys)
        </div>
    </main>

@endsection
