@extends('mvh')

@section('pagetitle')
    Home
@endsection

@section('content')
	<h4>Home</h4>

    @if($wedstrijden->count() == 0)
        <h3>Geen wedstrijden/evenementen.</h3>
    @else
        <h3>Deze maand :</h3>
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
@endsection
