@extends('layout.landingcontent')
@section('css', $css)
@section('title', $title)

@section('content')
    <section id="presentation-area">
        <div id="presentation-image">
            <img src="/assets/img/landing/studio-presentation-image.png" alt="Studio Angel Nishiharo">
        </div>
        <div id="presentation-text">
            <h2>Studio pensado no seu conforto</h2>
            <p>Cada detalhe foi carinhosamente pensado para você relaxar enquanto realça sua beleza ❤️</p>

            <a class="button" href="https://wa.me/5511971718424" target="_blank">Contate-nos</a>
        </div>
    </section>

    <h2 id="call-to-action-text">Conheça mais o nosso studio!</h2>

    <section id="photo-area">
        @foreach ($studio as $image)
            <div class="studio-image">
                <img src={{ $image['imageSource'] }} alt={{ $image['imageDescription'] }}>
                {{-- <div class="image-overlay">
                <div class="image-overlay-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div> --}}
            </div>
        @endforeach
    </section>
@endsection
