<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<style>
    h2
    {
        padding: 20px;
        font-size: 2.5rem;
        font-weight: 700;
    }
    .hero {
        background: url('https://via.placeholder.com/1920x1080') no-repeat center center;
        background-size: cover;
        color: white;
        padding: 100px 0;
    }
    .features .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }
    .features .card-img-top {
        border-bottom: 1px solid #ddd;
    }
    .features .card-body {
        padding: 20px;
    }
</style>
<header class="hero text-center text-white position-relative overflow-hidden">
    <div class="container position-relative">
        <video autoplay muted loop id="heroVideo">
            <source src="https://www.example.com/your-video.mp4" type="video/mp4">
            Tu navegador no soporta el elemento <code>video</code>.
        </video>
        <div class="hero-overlay d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h1>Bienvenido a FitLife360</h1>
                <p>Tu plataforma integral de gestión de gimnasio y bienestar</p>
                <a href="#" class="cta-button btn btn-primary">Regístrate Ahora</a>
            </div>
        </div>
    </div>
</header>

<section class="features text-center">
    <div class="container">
        <h2 class="mb-5">Nuestras Funcionalidades</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="primera.jpeg" class="card-img-top" alt="Gestión de Suscripciones">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Suscripciones</h5>
                        <p class="card-text">Administra tus suscripciones fácilmente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="segunda.jpg" class="card-img-top" alt="Tienda en Línea">
                    <div class="card-body">
                        <h5 class="card-title">Tienda en Línea</h5>
                        <p class="card-text">Compra suplementos y equipos desde un solo lugar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="3.jpg" class="card-img-top" alt="Recursos Educativos">
                    <div class="card-body">
                        <h5 class="card-title">Recursos Educativos</h5>
                        <p class="card-text">Accede a artículos y videos sobre fitness y nutrición.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="4.avif" class="card-img-top" alt="Comunidad de Apoyo">
                    <div class="card-body">
                        <h5 class="card-title">Comunidad de Apoyo</h5>
                        <p class="card-text">Únete a una comunidad de entusiastas del fitness.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
