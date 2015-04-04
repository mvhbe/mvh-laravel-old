@extends('mvh')

@section('pagetitle', 'Archief kalenders')

@section('content')
	<h4>Archief</h4>

    @if($kalenders->count() == 0)
        <h3>Geen kalenders.</h3>
    @else
        <h3>Kalenders :</h3>
        @include('kalenders.overzicht', ['kalenders' => $kalenders])
    @endif
@endsection
