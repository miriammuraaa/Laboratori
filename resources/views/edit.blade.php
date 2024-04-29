@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Editar producte</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('home') }}" class="btn btn-outline-primary mb-3">Enrere</a>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>¡Ups!</strong> Alguna cosa ha sortit malament: <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>CAS:</strong>
                                    <input type="text" name="cas" class="form-control" placeholder="CAS" value="{{ $product->cas }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Nom:</strong>
                                    <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $product->nom }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>FDS:</strong>
                                    <input type="text" name="fds" class="form-control" placeholder="FDS" value="{{ $product->fds }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Concentració:</strong>
                                    <input type="text" name="concentracio" class="form-control" placeholder="Concentración" value="{{ $product->concentracio }}">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Estat:</strong>
                                    <select name="estat" class="form-control">
                                        <option value="solid" {{ $product->estat == 'sòlid' ? 'selected' : '' }}>Sólido</option>
                                        <option value="liquid" {{ $product->estat == 'líquid' ? 'selected' : '' }}>Líquido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Tipus de concentració:</strong>
                                    <select name="tipus_concentracio" class="form-control">
                                        <option value="%" {{ $product->tipus_concentracio == '%' ? 'selected' : '' }}>%</option>
                                        <option value="mols" {{ $product->tipus_concentracio == 'mols' ? 'selected' : '' }}>mols</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Capacitat:</strong>
                                    <input type="text" name="capacitat" class="form-control" placeholder="Capacidad" value="{{ $product->capacitat }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Caducitat:</strong>
                                    <input type="date" name="caducitat" class="form-control" value="{{ $product->caducitat }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Armari:</strong>
                                    <input type="text" name="armari" class="form-control" placeholder="Armario" value="{{ $product->armari }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Quantitat:</strong>
                                    <input type="text" name="quantitat" class="form-control" placeholder="Quantitat" value="{{ $product->quantitat }}">
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary">Actualitzar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection