@extends('layout.landingcontent')

@section("title", "Sobre")

@section('content')
    <div
    id="carouselExampleControls"
    class="carousel slide"
    data-bs-ride="carousel"
    >
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img
        src="https://picsum.photos/700/300"
        class="d-block w-100"
        alt="..."
        />
    </div>
    <div class="carousel-item">
        <img
        src="https://picsum.photos/700/300"
        class="d-block w-100"
        alt="..."
        />
    </div>
    <div class="carousel-item">
        <img
        src="https://picsum.photos/700/300"
        class="d-block w-100"
        alt="..."
        />
    </div>
    </div>
    <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#carouselExampleControls"
    data-bs-slide="prev"
    >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#carouselExampleControls"
    data-bs-slide="next"
    >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="row">
    <div class="col-12 col-sm-12 col-md-4">
    <div class="card">
        <img src="https://picsum.photos/300" class="card-img-top" alt="..." />
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-4">
    <div class="card">
        <img src="https://picsum.photos/300" class="card-img-top" alt="..." />
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    </div>

    <div class="col-12 col-sm-12 col-md-4">
    <div class="card">
        <img src="https://picsum.photos/300" class="card-img-top" alt="..." />
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    </div>
    </div>
@endsection
