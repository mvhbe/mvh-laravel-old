@extends('mvh')

@section('pagetitle', 'WedstrijdUitslag')
@section('pagedescription', 'Bekijk de wedstrijduitslag van visclub moed &amp; volharding herenthout')


@section('content')
    <h3>Uitslagen</h3>
	@if(!isset($wedstrijd))
		Geen wedstrijduitslag beschikbaar.
	@else
        <h4>Wedstrijduitslag : {{ $wedstrijd->datum }} - {{ $wedstrijd->omschrijving }} {{ $wedstrijd->aantal_reeksen }}</h4>

        <table>
            {{-- */ $totaal = 0 /* --}}
            <tr>
                <th>Volgorde</th>
                <th>Deelnemer</th>
                <th>Plaats 1</th>
                <th>Reeks 1</th>
                @if ($wedstrijd->aantal_reeksen > 1)
                    <th>Plaats 2</th>
                    <th>Reeks 2</th>
                @endif
                @if ($wedstrijd->aantal_reeksen > 2)
                    <th>Plaats 3</th>
                    <th>Reeks 3</th>
                @endif
                <th>Totaal</th>
            </tr>
            @foreach($uitslagen as $uitslag)
                <tr>
                    <td align="center">{{ $uitslag->volgorde }}</td>
                    <td align="left">{{ $uitslag->deelnemer }}</td>
                    <td align="center">{{ $uitslag->plaats1 }}</td>
                    <td align="right">{{ number_format($uitslag->gewicht1, 0, ",", ".") }}</td>
                    @if ($wedstrijd->aantal_reeksen > 1)
                        <td align="center">{{ $uitslag->plaats2 }}</td>
                        <td align="right">{{ number_format($uitslag->gewicht2, 0, ",", ".") }}</td>
                    @endif
                    @if ($wedstrijd->aantal_reeksen > 2)
                        <td align="center">{{ $uitslag->plaats3 }}</td>
                        <td align="right">{{ number_format($uitslag->gewicht3, 0, ",", ".") }}</td>
                    @endif
                    <td align="right">{{ number_format($uitslag->totaal_gewicht, 0, ",", ".") }}</td>
                </tr>
                {{-- */ $totaal = $totaal + $uitslag->totaal_gewicht /* --}}
            @endforeach
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    @if ($wedstrijd->aantal_reeksen > 1)
                        <td></td>
                        <td></td>
                    @endif
                    @if ($wedstrijd->aantal_reeksen > 2)
                        <td></td>
                        <td></td>
                    @endif
                    <td align="right"><b>Totaal</b></td>
                    <td align="right"><b>{{ number_format($totaal, 0, ",", ".") }}</b></td>
                </tr>
            </tfoot>
        </table>
    @endif
@endsection
