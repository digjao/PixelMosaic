@extends('layouts.app')

@section('title','Home')

@section('content')
  <div class="home-layout">
    <aside class="sidebar-about">
      <section class="about">
        <div class="about-content">
        <img src="{{ asset('images/profile/profileImage.jpg') }}"
            alt="Foto de Perfil do João Pedro"
            class="about-photo">
            <h1>João Pedro Ferreira</h1>
          <div>
            <h2>Sobre Mim</h2>
            <p>Olá! Eu sou o João Pedro, front-end developer que ama música, filmes e código! Também amo muito meus gatos e por que não fazer um projeto de portfólio mostrando eles para o mundo haha</p>
            <p>
              <a href="https://www.linkedin.com/in/joao-pedro-de-oliveira-ferreira-5795aa215/" target="_blank">LinkedIn</a> •
              <a href="https://github.com/digjao/"   target="_blank">GitHub</a>
            </p>
          </div>
        </div>
      </section>
    </aside>

    <main class="main-content">
      <section 
        class="hero"
        @if($heroPhoto)
          style="--hero-img: url('{{ asset('images/gallery/'.$heroPhoto) }}');"
        @endif
      >
        <div class="container">
          <h1>PixelMosaic</h1>
          <p>Um simples projeto apenas para praticar Sass</p>
          <a href="{{ url('/galeria') }}" class="btn btn-secondary">Ver Galeria</a>
        </div>
      </section>

      <section class="features">
       <div class="container-fluid"> 
        <div class="feature-item">
            <h3>Conheça o James</h3>
            <p>Gato amarelo mais bagunceiro que ja veio a terra</p>
          </div>
          <div class="feature-item">
            <h3>Conheça o Joey</h3>
            <p>É o extremo oposto do irmão, muito comportado e nao da trabalho</p>
          </div>
          <div class="feature-item">
            <h3>Eles adoram brincar</h3>
            <p>Correm pela casa a metade do dia</p>
          </div>
          <div class="feature-item">
            <h3>Eles também adoram dormir</h3>
            <p>Passam a outra metade do dia dormindo pesado</p>
          </div>
        </div> 
      </section>
    
      <section class="gallery-preview">
        <div>
          <h2>Algumas imagens</h2>
         <div class="gallery">
        @foreach ($previewPhotos as $photo)
          <div class="gallery-item">
            <img src="{{ asset('images/gallery/' . $photo) }}" alt="">
          </div>
        @endforeach
          </div>

          <a href="{{ url('/galeria') }}" class="btn btn-secondary">Ver toda a Galeria</a>
        </div>
      </section>
    </main>
  </div>
@endsection
