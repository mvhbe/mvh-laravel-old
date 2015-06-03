@extends('mvh')

@section('pagetitle', 'Archief kalenders')
@section('pagedescription', 'Bekijk het archief met kalenders van visclub moed &amp; volharding herenthout')


@section('content')
	<h4>Archief - Kalenders</h4>

    @if($kalenders->count() == 0)
        <h3>Geen kalenders.</h3>
    @else
        <h3>Kalenders :</h3>
        @include('kalenders.overzicht', ['kalenders' => $kalenders])
    @endif
@endsection
