@extends('mvh')

@section('pagetitle')
    Archief uitslagen
@endsection

@section('content')
	<h4>Archief</h4>

    @if($kalenders->count() == 0)
        <h3>Geen Uitslagen.</h3>
    @else
        <h3>Uitslagen :</h3>
        @include('uitslagen.overzicht', ['kalender' => $kalenders])
        @endif
@endsection
