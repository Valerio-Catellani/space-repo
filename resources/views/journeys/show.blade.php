@extends('layouts.app')

@section('title', 'Journeys')


@section('content')

    <main>
        <div class="container px-5">
            <div class="d-flex justify-content-center ">
                <h2 class="py-4 hype-text-shadow">Viaggio {{ $journey->pianeta_di_partenza }} -
                    {{ $journey->pianeta_di_destinazione }}</h2>
            </div>
            <h3>{{ $journey->azienda }}</h3>
            <h4>Descrizione Viaggio</h4>
            <p>
                {{ $journey->descrizione_viaggio }}. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, sunt
                dolor iure consequatur animi culpa labore, eaque quidem fugit minima accusantium illum distinctio magni
                alias rem mollitia aliquid sed optio sit ipsa facere? Ex, doloribus quibusdam! Deserunt consectetur
                molestiae hic, veniam eum, repudiandae tempore nisi, laboriosam nihil quidem beatae ullam animi minima
                obcaecati. Velit incidunt, deserunt nostrum expedita quae non est. Eaque amet, optio fugit corrupti officia
                atque. Numquam voluptatum amet, id aliquam error consequuntur soluta, at impedit veritatis ad totam?
                Aspernatur voluptatem facere aperiam amet enim ad dolores eius veniam assumenda! At, sequi. Sequi nam eius
                obcaecati animi fugit?
            </p>
            <h4>Dettagli viaggio</h4>
            <div id="animated-field" class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <h3 class="text-center display-3 fw-bold hype-text-shadow">{{ $journey->pianeta_di_partenza }}</h3>
                    <p class="text-center">(partenza)</p>
                    @include('partials.planet-card', ['pianeta' => $journey->pianeta_di_partenza])
                </div>
                <div class="col-lg-6">
                    <h3 class="text-center display-3 fw-bold hype-text-shadow">{{ $journey->pianeta_di_destinazione }}</h3>
                    <p class="text-center">(destinazione)</p>
                    @include('partials.planet-card', ['pianeta' => $journey->pianeta_di_destinazione])
                </div>
            </div>
            <table class="table table-dark shadow my-5 hype-unselectable w-50">
                <thead>
                    <tr>
                        <th scope="col">Costo Biglietto (moneta interstellare)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $journey->costo_biglietto }} §</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-dark shadow my-5 hype-unselectable w-50">
                <thead>
                    <tr>
                        <th scope="col">Data di Partenza</th>
                        <th scope="col">Data di Arrivo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $journey->data_di_partenza }}</td>
                        <td>{{ $journey->data_di_arrivo }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

@endsection
