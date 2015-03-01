@extends('mvh')

@section('content')
	<h4>Home</h4>

    @if($wedstrijden->count() == 0)
        <p>Geen wedstrijden/evenementen.</p>
    @else
        @foreach($wedstrijden as $wedstrijd)
            <p>{{ $wedstrijd->omschrijving }}</p>
        @endforeach
    @endif

@stop
