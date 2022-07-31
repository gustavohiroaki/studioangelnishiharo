@extends('layout.landingcontent')
@section('css', 'services')
@section('title', 'Sobre')

@section('content')
    <img id="background-logo" src="/assets/img/logos/transparent-logo.png" alt="Transparent Logo Studio Angel Nishiharo">
    <section id="presentation-area">
        <div id="presentation-text">
            <h2>Sunda Bobra</h2>
            <p>Todos os nossos serviços são feitos com muito carinho para atender suas necessidades ❤️</p>

            <button>Contate-nos</button>
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
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend euismod.
                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus
                    tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus, vitae
                    scelerisque sapien sagittis at.
                </p>
                <button onclick="overlayOn('overlay-lash')">Catálogo de Cílios</button>
            </div>
            <div class="overlay" id="overlay-lash">
                <div class="overlay-content">
                    <h2>Catálogo de Cílios</h2>
                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="brow" class="service">
            <div class="service-image">
                <img src="/assets/img/landing/service-presentation-brows.png" alt="Fazendo a sobrancelha">
            </div>
            <div class="content-box">
                <h3>Sobrancelha</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend euismod.
                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus
                    tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus, vitae
                    scelerisque sapien sagittis at.
                </p>
                <button onclick="overlayOn('overlay-brow')">Catálogo de Sobrancelha</button>
            </div>
            <div class="overlay" id="overlay-brow">
                <div class="overlay-content">
                    <h2>Catálogo de Cílios</h2>
                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="make" class="service">
            <div class="service-image">
                <img src="/assets/img/landing/service-presentation-makes.png" alt="Fazendo a maquiagem">
            </div>
            <div class="content-box">
                <h3>Maquiagem</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend euismod.
                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus
                    tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus, vitae
                    scelerisque sapien sagittis at.
                </p>
                <button onclick="overlayOn('overlay-make')">Catálogo de Maquiagem</button>
            </div>
            <div class="overlay" id="overlay-make">
                <div class="overlay-content">
                    <h2>Catálogo de Cílios</h2>
                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/landing/service-presentation-lashes.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Cílios</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac sapien vel purus eleifend
                                euismod.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                Phasellus
                                tincidunt turpis iaculis, tempus dolor ornare, molestie lectus. Quisque accumsan enim purus,
                                vitae
                                scelerisque sapien sagittis at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script src="./assets/js/overlay.js"></script>
