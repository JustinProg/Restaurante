@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu Correo Electrónico!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha Enviado un Nuevo Enlace de Verificación a su Dirección de Correo Electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de Continuar, Revise su Correo Electrónico para Obtener un Enlace de Verificación.') }}
                    {{ __('Si no Recibiste el Correo Electrónico') }}, <a href="{{ route('verification.resend') }}">{{ __('Haga Click aquí para Solicitar Otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
