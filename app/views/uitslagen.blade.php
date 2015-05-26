@extends('mvh')

@section('pagetitle', 'Uitslagen')
@section('pagedescription', 'Bekijk de recentste uitslagen van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Uitslagen</h4>
	Under construction !

        <table>
            <tr>
                <th>Datum</th>
                <th>Omschrijving</th>
            </tr>
            @foreach($wedstrijden as $wedstrijd)
                <tr>
                    <td>{{ $wedstrijd->datum }}</td>
                    <td>{{ $wedstrijd->omschrijving }}</td>
                </tr>
            @endforeach
        </table>
@endsection
