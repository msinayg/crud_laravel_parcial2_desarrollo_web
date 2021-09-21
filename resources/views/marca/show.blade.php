@extends('layouts.app')

@section('template_title')
    {{ $marca->name ?? 'Show Marca' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Marca</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('marcas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $marca->marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
