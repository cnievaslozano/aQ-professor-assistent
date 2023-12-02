@extends('adminlte::page')

@section('title')
{{ __('Create') }} Contingut
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Create') }} Contingut</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('continguts.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('contingut.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('css')
<script src="https://cdn.tailwindcss.com"></script>
@stop