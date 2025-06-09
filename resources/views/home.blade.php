@extends('layouts.app')

@section('title','Bem-vindo')

@section('content')
  <div class="text-center">
    <h1>Bem-vindo ao PixelMosaic</h1>
    <p>Explore minha galeria de trabalhos e design em SCSS.</p>
    <a href="{{ url('/galeria') }}" class="btn">Ver Galeria</a>
  </div>
@endsection
