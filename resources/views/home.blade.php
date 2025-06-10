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
            <p>Olá! Eu sou o João Pedro, front-end developer que ama SCSS, PHP e design gráfico. Aqui compartilho meus melhores trabalhos e fotografias.</p>
            <p>
              <a href="https://linkedin.com/in/seulink" target="_blank">LinkedIn</a> •
              <a href="https://github.com/seunome"   target="_blank">GitHub</a>
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
          <p>Mostrando meu trabalho através de design gráfico e fotografia.</p>
          <a href="{{ url('/galeria') }}" class="btn btn-primary">Ver Galeria</a>
        </div>
      </section>
    
      {{-- Destaques --}}
      <section class="features">
       <div class="container"> 
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
        <div class="container">
          <h2>Algumas imagens</h2>
          <div class="gallery">
            @foreach (['foto1.jpg','foto2.jpg','foto3.jpg','foto4.jpg'] as $img)
              <div class="gallery-item">
                <img src="{{ asset('images/' . $img) }}" alt="">
              </div>
            @endforeach
          </div>
          <a href="{{ url('/galeria') }}" class="btn btn-secondary">Ver toda a Galeria</a>
        </div>
      </section>

    </main>

  </div>
@endsection
