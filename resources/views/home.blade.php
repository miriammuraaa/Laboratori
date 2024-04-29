@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="col-md-6">
            <h2>Productes Laboratori</h2>
        </div>
        @auth
        @if (auth()->user()->admin) {{-- Verifica si el usuario logeado es admin --}}
        <div class="col-md-6 text-md-end mt-md-0 mt-3 d-block d-md-none">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Afegir Producte</a>
        </div>
        <div class="d-none d-md-block mt-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Afegir Producte</a>
        </div>
        @endif
        @endauth
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success mb-4">
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                <th>CAS</th>
                <th>Nom</th>
                <th>Concentració</th>
                <th>Tipus de Concentració</th>
                <th>Estat</th>
                <th>Capacitat</th>
                <th>Data de Caducitat</th>
                <th>Armari</th>
                <th>Quantitat</th>
                @auth
                <th>Accions</th>
                @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                @if($product->quantitat > 0)
                <tr>
                    <td class="fw-bold">{{ $product->cas }}</td>
                    <td>{{$product->nom}}</td>
                    <td>{{ $product->concentracio }}</td>
                    <td>{{ $product->tipus_concentracio }}</td>
                    <td>{{ $product->estat }}</td>
                    <td>{{ $product->capacitat }}</td>
                    <td>{{ $product->caducitat }}</td>
                    <td>{{ $product->armari }}</td>
                    <td>{{ $product->quantitat }}</td>
                    @auth
                    <td>
                    <a href="{{ route('consums.index', $product->id) }}" class="btn btn-outline-dark mt-2">Retirar</a>

                        @if (auth()->user()->admin) {{-- Verifica si el usuario logeado es admin --}}
                    
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-dark mt-2">Editar</a>

                        <form action="{{route('products.destroy',$product)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger mt-2">Eliminar</button>
                        </form>
                    @endif
                    @endauth
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>

@endsection
