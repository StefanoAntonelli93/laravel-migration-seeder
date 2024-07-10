@extends('layouts.app')
@section('trains')
    <section>
        <div class="container py-4 mt-4">
            <h3>Treni in partenza oggi:</h3>
            {{-- <img src="{{ Vite::asset('resources/img/logo.jpg') }}" alt="pic"> --}}
            <ul class="list-unstyled py-4">
                @foreach ($trains as $train)
                    <li>

                        <div class="fw-semibold py-2">{{ $train->azienda }}</div>
                        <div>Partenza: {{ $train->stazione_di_partenza }}</div>
                        <div>Arrivo: {{ $train->stazione_di_arrivo }}</div>
                        {{-- per creare un data leggibile uso libreria carbon (namespace) --}}
                        <div>Data partenza:
                            {{ \Carbon\Carbon::parse($train->data_di_partenza)->format('d/m/Y') }}
                        </div>
                        {{-- per creare un data leggibile uso libreria carbon (namespace) --}}
                        <div>Data arrivo:
                            {{ \Carbon\Carbon::parse($train->data_di_arrivo)->format('d/m/Y') }}
                        </div>

                        <div>Orario partenza: {{ \Carbon\Carbon::parse($train->orario_di_partenza)->format('H.i') }}</div>
                        <div>Orario arrivo: {{ \Carbon\Carbon::parse($train->orario_di_arrivo)->format('H.i') }}</div>
                        <div>Codice treno: {{ $train->codice_treno }}</div>
                    </li>
                    <hr>
                @endforeach

            </ul>


        </div>
    </section>
@endsection
