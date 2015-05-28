@extends('mvh')

@section('pagetitle', 'Uitslagen')
@section('pagedescription', 'Bekijk de recentste uitslagen van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Uitslagen</h4>

    <table>
        <tr>
            <th>Datum</th>
            <th>Omschrijving</th>
        </tr>
        @foreach($wedstrijden as $wedstrijd)
            <tr>                            
                <td><a href="{{ URL::to('/uitslag/' . $wedstrijd->wedstrijd_id) }}" title="{{ $wedstrijd->datum }}">{{ $wedstrijd->datum }}</a></td>
                <td>{{ $wedstrijd->omschrijving }}</td>
            </tr>
        @endforeach
    </table>
@endsection
