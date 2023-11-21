@extends('adminlte::page')

@section('title')

@section('content')

    @if (request()->is('dashboard/moduls'))
        <h2>MODULS</h2>
        <p>MOSTRAR MODULS</p>
    @elseif (request()->is('dashboard/ufs'))
        <h2>UFS</h2>
        <p>MOSTRAR UFS.</p>
    @else
        <x-bienvenida />
    @endif
@stop

@section('css')
    <script src="https://cdn.tailwindcss.com"></script>
@stop
