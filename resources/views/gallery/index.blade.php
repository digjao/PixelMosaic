{{-- resources/views/gallery/index.blade.php --}}
@extends('layouts.app')

@section('title','Galeria')

@section('content')
<section class="gallery-page">
  <h2>Toda a Galeria</h2>

  <div class="gallery">
    @foreach($photos as $photo)
      <div class="gallery-item">
        <img
          src="{{ asset('images/gallery/' . $photo['file']) }}"
          alt="Foto {{ $loop->iteration }}"
        >
      </div>
    @endforeach
  </div>
</section>
@endsection
