{{-- resources/views/gallery/index.blade.php --}}
@extends('layouts.app')

@section('title','Galeria')

@section('content')
<section class="gallery-page">
  <h2>Toda a Galeria</h2>

  <div class="gallery">
    @foreach($photos as $file)
  <a href="{{ asset('images/gallery/' . $file) }}" class="gallery-item">
    <img src="{{ asset('images/gallery/' . $file) }}" alt="Foto {{ $loop->iteration }}">
  </a>
@endforeach
  </div>
</section>
@endsection
