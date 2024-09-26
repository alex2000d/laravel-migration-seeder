@extends('layouts.app')

@section('content')
<h1 class="text-center">Tutti i Treni</h1>
<table class="mt-5 text-center p-3 table">
    <thead class="margin">
        <tr class="mx-4">
            <th class="px-2 py-2">Azienda</th>
            <th class="px-2 py-2">Stazione di Partenza</th>
            <th class="px-2 py-2">Stazione di Arrivo</th>
            <th class="px-2 py-2">Orario di Partenza</th>
            <th class="px-2 py-2">Orario di Arrivo</th>
            <th class="px-2 py-2">Codice Treno</th>
            <th class="px-2 py-2">Numero Carrozze</th>
            <th class="px-2 py-2">In Orario</th>
            <th class="px-2 py-2">Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            <tr>
                <td class="px-2 py-2">{{ $train->azienda }}</td>
                <td class="px-2 py-2">{{ $train->stazione_di_partenza }}</td>
                <td class="px-2 py-2">{{ $train->stazione_di_arrivo }}</td>
                <td class="px-2 py-2">{{ $train->orario_di_partenza }}</td>
                <td class="px-2 py-2">{{ $train->orario_di_arrivo }}</td>
                <td class="px-2 py-2">{{ $train->codice_treno }}</td>
                <td class="px-2 py-2">{{ $train->numero_carrozze }}</td>
                <td class="px-2 py-2">{{ $train->in_orario }}</td>
                <td class="px-2 py-2">{{ $train->cancellato }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
