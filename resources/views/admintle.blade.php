@extends('adminlte::page')

@section('title')

@section('content')

    @if (request()->is('dashboard/moduls'))
        <x-show-list-moduls />
    @elseif (request()->is('dashboard/ufs'))
        <x-show-list-ufs />
    @elseif (request()->is('dashboard/programacions'))
        <x-show-list-programacions />
    @elseif (request()->is('dashboard'))
        <x-bienvenida />
    @endif
@stop

@section('css')
    <script src="https://cdn.tailwindcss.com"></script>
@stop
