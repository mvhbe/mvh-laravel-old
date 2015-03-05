@extends('mvh')

@section('content')
	<h4>Archief</h4>

    @if($kalenders->count() == 0)
        <h3>Geen kalenders.</h3>
    @else
        <h3>Kalenders :</h3>
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
    @endif
@endsection
