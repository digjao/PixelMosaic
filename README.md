<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# PixelMosaic

Galeria de fotos simples em Laravel + Vite + Sass.

## Pré-requisitos

- PHP ≥ 8.0  
- Composer  
- Node.js ≥ 16 e NPM (or Yarn)  
- Extensões PHP: `fileinfo`

## Instalação

1. Clone o repositório  
   ```bash
   git clone https://github.com/SEU_USUARIO/pixelMosaic.git
   cd pixelMosaic

2. Instale as dependências PHP e JS
   composer install
   npm install

3. Gere o arquivo de ambiente e a chave Laravel
    cp .env.example .env
    php artisan key:generate

4. Inicie o watcher de assets e o servidor PHP
    npm run dev
    php artisan serve

5. Abra no navegador
    http://127.0.0.1:8000