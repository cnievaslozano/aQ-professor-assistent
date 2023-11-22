@extends('layouts.app')

@section('template_title')
    {{ $programacion->name ?? "{{ __('Show') Programacion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Programacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $programacion->users_id }}
                        </div>
                        <div class="form-group">
                            <strong>Any Academic:</strong>
                            {{ $programacion->any_academic }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcio:</strong>
                            {{ $programacion->descripcio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
