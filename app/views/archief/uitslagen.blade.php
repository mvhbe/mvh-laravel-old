@extends('mvh')

@section('content')
	<h4>Archief</h4>

    @if($kalenders->count() == 0)
        <h3>Geen Uitslagen.</h3>
    @else
        <h3>Uitslagen :</h3>
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
    @endif
@endsection
