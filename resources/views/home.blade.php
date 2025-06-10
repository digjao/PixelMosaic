@extends('layouts.app')

@section('title','Home')

@section('content')
  <div class="home-layout">

      {{-- Sidebar fixa (coluna 2) --}}
    <aside class="sidebar-about">
      <section class="about">
        <div class="about-content">
          <img src="{{ asset('images/foto-perfil.jpg') }}"
               alt="Seu Nome"
               class="about-photo">
          <div>
            <h2>Sobre Mim</h2>
            <p>Olá! Eu sou o João Pedro, front-end developer que ama música, filmes e código! Adoro colocar aprendizado em prática como em simples projetos como esse</p>
            <p>
              <a href="https://www.linkedin.com/in/joao-pedro-de-oliveira-ferreira-5795aa215/" target="_blank">LinkedIn</a> •
              <a href="https://github.com/digjao/"   target="_blank">GitHub</a>
            </p>
          </div>
        </div>
      </section>
    </aside>

    {{-- Conteúdo principal (coluna 1) --}}
    <main class="main-content">

      {{-- Hero --}}
      <section class="hero">
        <div class="container">
          <h1>PixelMosaic</h1>
          <p>Um simples projeto apenas para praticar Sass</p>
          <a href="{{ url('/galeria') }}" class="btn btn-primary">Ver Galeria</a>
        </div>
      </section>
    
      {{-- Destaques --}}
      <section class="features">
       <div class="container-fluid"> 
        <div class="feature-item">
            <h3>Design Responsivo</h3>
            <p>Layouts que funcionam em qualquer tela.</p>
          </div>
          <div class="feature-item">
            <h3>SCSS Organizado</h3>
            <p>Arquitetura de estilos modular e reutilizável.</p>
          </div>
          <div class="feature-item">
            <h3>Performance</h3>
            <p>Imagens otimizadas e carregamento rápido.</p>
          </div>
          <div class="feature-item">
            <h3>Performance</h3>
            <p>Imagens otimizadas e carregamento rápido.</p>
          </div>
        </div> 
      </section>
    
      {{-- Preview Galeria --}}
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
