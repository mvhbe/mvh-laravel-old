@extends('mvh')

@section('pagetitle', "Kalender")

@section('content')
	<h4>Kalender</h4>

	@if($kalender->count() == 0)
		<h3>Geen kalender.</h3>
	@else
		<h3>Wedstrijdkalender {{ $kalender->jaar }}</h3>
		@if($wedstrijden->count() > 0)
	        <table>
	            <tr>
	                <th>Datum</th>
	                <th>Omschrijving</th>
	                <th>Aanvang</th>
	                <th>Opmerkingen</th>
	            </tr>
	            @foreach($wedstrijden as $wedstrijd)
	                <tr>
	                    <td>{{ $wedstrijd->datum }}</td>
	                    <td>{{ $wedstrijd->omschrijving }}</td>
	                    <td>{{ $wedstrijd->aanvang }}</td>
	                    <td>{{ $wedstrijd->opmerkingen }}</td>
	                </tr>
	            @endforeach
	        </table>
        @endif
	@endif
@endsection
