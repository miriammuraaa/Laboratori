@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Historial</h2>
                </div>
                
                <div class="card-body">
                <a href="{{ route('home') }}" class="btn btn-primary mb-3">Enrere</a>
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nom d'Usuari</th>
                            <th>Data de Consum</th>
                            <th>CAS del Producte</th>
                            <th>Concentració</th>
                            <th>Motiu</th>
                            <th>Quantitat de Consum</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consums as $consum)
                        <tr>
                            <td>{{ $consum->user->name }}</td> <!-- Accediendo al nombre del usuario -->
                            <!-- Suponiendo que tienes una relación user en el modelo Consum -->
                            <td>{{ $consum->data }}</td>
                            <td>{{ $consum->cas }}</td>
                            <td>{{ $consum->concentracio }}</td>
                            <td>{{ $consum->motiu }}</td>
                            <td>{{ $consum->consum }} {{ $consum->product->estat === 'Líquid' ? 'ml' : 'g' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
