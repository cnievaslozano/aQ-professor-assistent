@extends('adminlte::page')

@section('title')
{{ __('Create') }} Uf
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Create') }} Uf</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('ufs.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('uf.form')

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