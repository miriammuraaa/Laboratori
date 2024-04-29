@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Informació del Producte</h2>
                </div>
                
                <div class="card-body">
                <a href="{{ route('home') }}" class="btn btn-outline-primary mb-3">Enrere</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>CAS</th>
                                    <th>Nom</th>
                                    <th>Concentració</th>
                                    <th>Tipus de Concentració</th>
                                    <th>Estat</th>
                                    <th>Capacitat</th>
                                    <th>Caducitat</th>
                                    <th>Armari</th>
                                    <th>Quantitat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $product->cas }}</td>
                                    <td>{{$product->nom}}</td>
                                    <td>{{ $product->concentracio }}</td>
                                    <td>{{ $product->tipus_concentracio }}</td>
                                    <td>{{ $product->estat }}</td>
                                    <td>{{ $product->capacitat }}</td>
                                    <td>{{ $product->caducitat }}</td>
                                    <td>{{ $product->armari }}</td>
                                    <td>{{ $product->quantitat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('consums.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label for="quantitat">Quantitat que vols retirar:</label>
                            <input type="text" class="form-control" id="quantitat" name="quantitat" placeholder="ex: 10.2">
                        </div>
                        <div class="form-group">
                                    Motiu:
                                    <select name="motiu" class="form-control">
                                        <option value="Consum">Consum</option>
                                        <option value="Regularitzacio">Regularització</option>
                                        <option value="Altres">Altres</option>
                                    </select>
                            </div>
                            <div class="col-md-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary mt-4">Retirar</button>
                            </div>
                        @if(Session::has('error'))
                        <div class="alert alert-danger mt-3">
                            <strong>{{ Session::get('error') }}</strong>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection