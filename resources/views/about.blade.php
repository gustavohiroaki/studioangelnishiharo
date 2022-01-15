@extends('layout.landingcontent')
@section('css', 'about')
@section('title', 'Sobre')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/miniature/Cilios2.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="/assets/img/miniature/Studio.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/700/300" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row">
        <h2 class="text-center service-text">Conheça melhor nossos serviços</h2>
    </div>

    <div class="row about-section image-text">
        <div class="col image"><img src="https://picsum.photos/400/300" alt="..."></div>
        <div class="col text">
            <h2>Lorem Ipsum</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus
                eleifend euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Phasellus tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus, vitae
                scelerisque sapien sagittis at.
            </p>
        </div>
    </div>

    <div class="row about-section text-image">
        <div class="col text">
            <h2>Lorem Ipsum</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus
                eleifend euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Phasellus tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus, vitae
                scelerisque sapien sagittis at.
            </p>
        </div>
        <div class="col image"><img src="https://picsum.photos/400/300" alt="..."></div>
    </div>

    <div class="row about-section image-text">
        <div class="col image"><img src="https://picsum.photos/400/300" alt="..."></div>
        <div class="col text">
            <h2>Lorem Ipsum</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus
                eleifend euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Phasellus tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus, vitae
                scelerisque sapien sagittis at.
            </p>
        </div>
    </div>
@endsection
