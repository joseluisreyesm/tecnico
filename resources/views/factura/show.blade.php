@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? "{{ __('Mostrar ') Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar ') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Volver a Facturas') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $factura->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $factura->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $factura->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Postal:</strong>
                            {{ $factura->codigo_postal }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $factura->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $factura->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $factura->precio_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $factura->subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $factura->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
