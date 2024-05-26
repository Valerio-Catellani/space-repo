<div class="p-2 rounded-3 overflow-hidden overflow-hidden">
    <div class=" pb-0 hype-unselectable">
        <div id="{{ $pianeta->nome }}" class="pianeta w-100"></div>
        <table class="table table-dark table-hover shadow my-5 hype-unselectable">
            <thead>
                <tr>
                    <th scope="col">Informazioni</th>
                    <th scope="col">Dati</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pianeta->getAttributes() as $element => $value)
                    @if ($element !== 'id' && $element !== 'created_at' && $element !== 'updated_at')
                        <tr>
                            <td>{{ ucwords(str_replace('_', ' ', $element)) }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>
</div>
