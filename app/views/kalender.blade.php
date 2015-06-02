@extends('mvh')

@section('pagetitle', "Kalender")
@section('pagedescription', 'Bekijk de recentste kalender met wedstrijden van visclub moed &amp; volharding herenthout')

@section('content')
	<h4>Kalender</h4>

	@if(count($kalender) === 0)
		<h3>Geen kalender.</h3>
	@else
		<h3>Wedstrijdkalender {{ $kalender->jaar }}</h3>
		@if(count($wedstrijden) > 0)
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
