<table>
    <tr>
        <th>Uitslagen</th>
    </tr>
    @foreach($kalenders as $kalender)
        <tr>
            <td>Uitslagen {{ $kalender->jaar }}</td>
        </tr>
    @endforeach
</table>

