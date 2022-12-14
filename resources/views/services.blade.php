@extends('layout.landingcontent')
@section('css', $css)
@section('title', $title)
@section('content')
    <img id="background-logo" src="/assets/img/logos/transparent-logo.png" alt="Transparent Logo Studio Angel Nishiharo">
    <section id="presentation-area">
        <div id="presentation-text">
            <h2>Realçar sua beleza?<br>Deixa comigo ❤️</h2>
            <p>Sou uma profissional formada em visagismo, especializada em patentear a sua beleza.</p>

            <a class="button" href="https://wa.me/5511971718424" target="_blank">Contate-nos</a>
        </div>
        <div id="presentation-image">
            <img src="/assets/img/landing/service-presentation-image.png" alt="Studio Angel Nishiharo">
        </div>
    </section>

    <section id="all-services">
        <div id="lash" class="service">
            <div class="service-image">
                <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
            </div>
            <div class="content-box">
                <h3>Cílios</h3>
                <div class="content-text">
                    <p>
                        Nosso olhar pode fazer diferença em qualquer situação, sendo um portal que envolve o corpo e
                        sentimento, além de se sentir melhor, temos mais praticidade no dia a dia, dispensando maquiagem.
                    </p>
                    <p>
                        São duas horas relaxantes, oferecidas pelo conforto do espaço e maca egonômica com massagem para sua
                        melhor experiência.
                    </p>
                </div>
                <button class="button" onclick="overlayOn('overlay-lash')">Catálogo de Cílios</button>
            </div>
            <div class="overlay" id="overlay-lash">
                <span class="material-symbols-outlined close-icon">
                    close
                </span>
                <div class="overlay-content">
                    <h2>Catálogo de Cílios</h2>
                    @foreach ($services['lashes'] as $service)
                        <div class="overlay-product">
                            <div class="overlay-product-image">
                                <img src={{ $service['imageSource'] }} alt={{ $service['imageDescription'] }}>
                            </div>
                            <div class="content-box">
                                <h3>{{ $service['serviceTitle'] }}</h3>
                                <div class="content-text">
                                    {{ $service['serviceDescription'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="brow" class="service">

            <div class="service-image">
                <img src="/assets/img/landing/service-presentation-brows.png" alt="Fazendo a sobrancelha">
            </div>
            <div class="content-box">
                <h3>Sobrancelha</h3>
                <div class="content-text">
                    <p>
                        A sobrancelha tem uma função muito importante de compor a harmonização do rosto. É uma das partes
                        mais expressivas em nosso rosto, destaca nossas expressões faciais e realça a beleza de cada pessoa.
                    </p>
                </div>
                <button class="button" onclick="overlayOn('overlay-brow')">Catálogo de Sobrancelha</button>
            </div>
            <div class="overlay" id="overlay-brow">
                <span class="material-symbols-outlined close-icon">
                    close
                </span>
                <div class="overlay-content">
                    <h2>Catálogo de Cílios</h2>
                    @foreach ($services['brow'] as $service)
                        <div class="overlay-product">
                            <div class="overlay-product-image">
                                <img src={{ $service['imageSource'] }} alt={{ $service['imageDescription'] }}>
                            </div>
                            <div class="content-box">
                                <h3>{{ $service['serviceTitle'] }}</h3>
                                <div class="content-text">
                                    {{ $service['serviceDescription'] }}

                                    <ul>
                                        @foreach ($service['serviceDescriptionList'] as $listItem)
                                            <li>{{ $listItem }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- <div id="make" class="service">
                                                                                                                                                                                                                                                                    <div class="service-image">
                                                                                                                                                                                                                                                                        <img src="/assets/img/landing/service-presentation-makes.png" alt="Fazendo a maquiagem na Ana">
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="content-box">
                                                                                                                                                                                                                                                                        <h3>Maquiagem</h3>
                                                                                                                                                                                                                                                                        <div class="content-text">
                                                                                                                                                                                                                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend euismod.
                                                                                                                                                                                                                                                                            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus
                                                                                                                                                                                                                                                                            tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus, vitae
                                                                                                                                                                                                                                                                            scelerisque sapien sagittis at.
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                        <button class="button" onclick="overlayOn('overlay-make')">Catálogo de Maquiagem</button>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                    <div class="overlay" id="overlay-make">
                                                                                                                                                                                                                                                                        <div class="overlay-content">
                                                                                                                                                                                                                                                                            <h2>Amostras de Maquiagens</h2>
                                                                                                                                                                                                                                                                            <div class="overlay-product">
                                                                                                                                                                                                                                                                                <div class="overlay-product-image">
                                                                                                                                                                                                                                                                                    <img src="/assets/img/catalog/make-ana.png" alt="Fazendo os cílios">
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="content-box">
                                                                                                                                                                                                                                                                                    <h3>Maquiagem Festas</h3>
                                                                                                                                                                                                                                                                                    <div class="content-text">
                                                                                                                                                                                                                                                                                        Maquiagem voltada para festas.
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                            <div class="overlay-product">
                                                                                                                                                                                                                                                                                <div class="overlay-product-image">
                                                                                                                                                                                                                                                                                    <img src="/assets/img/catalog/make-gabi.png" alt="Fazendo os cílios">
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="content-box">
                                                                                                                                                                                                                                                                                    <h3>Maquiagem Social</h3>
                                                                                                                                                                                                                                                                                    <div class="content-text">
                                                                                                                                                                                                                                                                                        Maquiagem social
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                </div> -->
    </section>
@endsection

<script src="./assets/js/overlay.js"></script>
