@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Crear producte</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('home') }}" class="btn btn-primary mb-3">Enrere</a>

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

                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>CAS:</strong>
                                    <input type="text" name="cas" class="form-control" placeholder="CAS">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Nom:</strong>
                                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>FDS:</strong>
                                    <input type="text" name="fds" class="form-control" placeholder="FDS">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Concentració:</strong>
                                    <input type="text" name="concentracio" class="form-control" placeholder="Concentració">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Estat:</strong>
                                    <select name="estat" class="form-control">
                                        <option value="solid">Sòlid</option>
                                        <option value="liquid">Líquid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Tipus de concentració:</strong>
                                    <select name="tipus_concentracio" class="form-control">
                                        <option value="%">%</option>
                                        <option value="mols">mols</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Capacitat:</strong>
                                    <input type="text" name="capacitat" class="form-control" placeholder="Capacitat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Caducitat:</strong>
                                    <input type="date" name="caducitat" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Armari:</strong>
                                    <input type="text" name="armari" class="form-control" placeholder="Armari">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Quantitat:</strong>
                                    <input type="text" name="quantitat" class="form-control" placeholder="Quantitat">
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection