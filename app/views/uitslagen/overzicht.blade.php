<table>
    <tr>
        <th>Uitslagen</th>
    </tr>
    @foreach($wedstrijden as $wedstrijd)
        <tr>
            <td><a href="{{ URL::to('/archief/wedstrijduitslagen/' . $wedstrijd->id) }}" title="Uitslagen {{ $wedstrijd->jaar }}">Uitslagen {{ $wedstrijd->omschrijving }}</a></td>
        </tr>
    @endforeach
</table>

