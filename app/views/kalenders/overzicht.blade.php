<table>
    <tr>
        <th>Kalender</th>
    </tr>
    @foreach($kalenders as $kalender)
        <tr>
            <td><a href="{{ URL::to('/archief/kalender/' . $kalender->id) }}" title="Wedstrijdkalender {{ $kalender->jaar }}">Wedstrijdkalender {{ $kalender->jaar }}</a></td>
        </tr>
    @endforeach
</table>
