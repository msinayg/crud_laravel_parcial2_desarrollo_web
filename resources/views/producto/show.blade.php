@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $producto->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Idmarca:</strong>
                            {{ $producto->idMarca }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Costo:</strong>
                            {{ $producto->precio_costo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $producto->precio_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia:</strong>
                            {{ $producto->existencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
