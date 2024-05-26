<table class="table table-dark table-hover shadow my-5 hype-unselectable table-clickable">
    <thead>
        <tr>
            <th scope="col">#id viaggio</th>
            <th class="d-none d-lg-table-cell" scope="col">Codice astronave</th>
            <th class="d-none d-lg-table-cell" scope="col">Nome azienda</th>
            <th scope="col">Pianeta di Partenza</th>
            <th scope="col">Pianeta di Destinazione</th>
            <th scope="col">Data di partenza</th>
            <th scope="col">Data di arrivo</th>
            <th class="d-none d-lg-table-cell" scope="col">Costo biglietto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($journeys as $journey)
            <tr>
                <td><a href="{{ route('journeys.show', $journey->id) }}">{{ $journey->id }} </a></td>
                <td class="d-none d-lg-table-cell"><a
                        href="{{ route('journeys.show', $journey->id) }}">{{ $journey->codice_astronave }}</a></td>
                <td class="d-none d-lg-table-cell"><a
                        href="{{ route('journeys.show', $journey->id) }}">{{ $journey->nome_azienda }}</a></td>
                <td><a href="{{ route('journeys.show', $journey->id) }}">{{ $journey->pianeta_di_partenza }}</a></td>
                <td><a href="{{ route('journeys.show', $journey->id) }}">{{ $journey->pianeta_di_destinazione }}</a>
                </td>
                <td><a href="{{ route('journeys.show', $journey->id) }}">{{ $journey->data_di_partenza }}</a></td>
                <td><a href="{{ route('journeys.show', $journey->id) }}">{{ $journey->data_di_arrivo }}</a></td>
                <td class="d-none d-lg-table-cell"> <a
                        href="{{ route('journeys.show', $journey->id) }}">{{ $journey->costo_biglietto . ' §' }}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
