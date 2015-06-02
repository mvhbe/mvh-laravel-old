<table>
    <tr>
        <th>Uitslagen</th>
    </tr>
    @foreach($kalenders as $kalender)
        <tr>
            <td><a href="{{ URL::to('/archief/uitslagen/' . $kalender->id) }}" title="Uitslagen {{ $kalender->jaar }}">Uitslagen {{ $kalender->jaar }}</a></td>
        </tr>
    @endforeach
</table>

