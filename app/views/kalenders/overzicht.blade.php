<table>
    <tr>
        <th>Kalender</th>
    </tr>
    @foreach($kalenders as $kalender)
        <tr>
            <td>Wedstrijd {{ $kalender->jaar }}</td>
        </tr>
    @endforeach
</table>
