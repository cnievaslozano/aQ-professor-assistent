@extends('adminlte::page')

@section('title')
{{ __('Update') }} Programacion
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Update') }} Programacion</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('programacions.update', $programacion->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('programacion.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@stop
@section('css')
<script src="https://cdn.tailwindcss.com"></script>
@stop