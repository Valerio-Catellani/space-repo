<table class="table table-dark table-hover shadow my-5 hype-unselectable">
    <thead>
        <tr>
            <th scope="col">Codice astronave</th>
            <th scope="col">Nome azienda</th>
            <th scope="col">Pianeta di Partenza</th>
            <th scope="col">Pianeta di Destinazione</th>
            <th scope="col">Data di partenza</th>
            <th scope="col">Data di arrivo</th>
            <th scope="col">Costo biglietto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($journeys as $journey)
            <tr>
                <td>{{ $journey->codice_astronave }}</td>
                <td>{{ $journey->nome_azienda }}</td>
                <td>{{ $journey->pianeta_di_partenza }}</td>
                <td>{{ $journey->pianeta_di_destinazione }}</td>
                <td>{{ $journey->data_di_partenza }}</td>
                <td>{{ $journey->data_di_arrivo }}</td>
                <td>{{ $journey->costo_biglietto . ' §' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
