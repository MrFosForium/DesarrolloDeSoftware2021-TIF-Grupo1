@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Nuestra Calculadora!</h1>
                        <p>Disfruta utilizando la calculadora. Dale click a un calculo mas abajo para ver mas detalles!</p>
                    </div>
                    <div class="col-4">
                        <p>Utiliza la calculadora</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Calculadora</a>
                    </div>
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No hay calculos disponibles</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection