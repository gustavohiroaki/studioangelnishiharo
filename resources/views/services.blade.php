@extends('layout.landingcontent')
@section('css', 'services')
@section('title', 'Sobre')

@section('content')
    <img id="background-logo" src="/assets/img/logos/transparent-logo.png" alt="Transparent Logo Studio Angel Nishiharo">
    <section id="presentation-area">
        <div id="presentation-text">
            <h2>Sunda Bobra</h2>
            <p>Todos os nossos serviços são feitos com muito carinho para atender suas necessidades ❤️</p>

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
                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/cilios-fio-fio.png" alt="Cílios clássico fio a fio">
                        </div>
                        <div class="content-box">
                            <h3>Clássico fio a fio</h3>
                            <div class="content-text">
                                Ideal para quem está começando no mundo da extensão e deseja realçar os cílios. Nele é
                                colocado um fio sintético em cima de um fio natural, proporciona alongamento e um efeito
                                rímel. Indicado para quem gosta de naturalidade e praticidade no dia a dia. Sua manutenção é
                                feita entre 15 a 20 dias.
                            </div>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/cilios-volume-egipcio.png" alt="Cílios volume egípcio">
                        </div>
                        <div class="content-box">
                            <h3>Volume egípcio</h3>
                            <div class="content-text">
                                É colocado um fio em formato de W, realça o olhar, proporciona volume sutil e natural, não
                                deixa um olhar marcado.
                            </div>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/cilios-volume-brasileiro.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Volume brasileiro</h3>
                            <div class="content-text">
                                É colocado um fio em formato de Y, consegue proporcionar volume, deixando o olhar marcado,
                                porém, sem fugir da naturalidade.
                            </div>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/cilios-volume-hibrido.png" alt="Fazendo os cílios">
                        </div>
                        <div class="content-box">
                            <h3>Volume hibrido</h3>
                            <div class="content-text">
                                Possui um volume médio, nele é misturado a técnica do clássico fio a fio e o volume russo.
                            </div>
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
                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/sobrancelha-design.png" alt="Design de sobrancelha">
                        </div>
                        <div class="content-box">
                            <h3>Design de sobrancelhas</h3>
                            <div class="content-text">
                                Design personalizado, cria-se pontos estratégicos através das próprias medidas faciais,
                                tornando o design personalizado para cada tipo de rosto. Essa técnica permite valorizar o
                                máximo de pelos das sobrancelhas, sem afinar, evitando possíveis falhas no futuro.
                                <ul>
                                    <li>Incluso argiloterapia para auxiliar na reconstrução de sobrancelhas</li>
                                    <li>Incluso massagem com esferas de cromoterapia auxiliando na cicatrização, e efeito
                                        calmante na região das sobrancelhas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/sobrancelha-design-henna.png"
                                alt="Design de sobrancelha com henna">
                        </div>
                        <div class="content-box">
                            <h3>Design de sobrancelha com henna</h3>
                            <div class="content-text">
                                Promove preenchimento natural. Indicado para pessoas que sofrem com falhas na sobrancelhas,
                                ou para quem deseja realçar o design. Não é uma técnica permanente, ideal para eventos.
                            </div>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/sobrancelha-brow-lamination.png"
                                alt="Brow Lamination na sobrancelha">
                        </div>
                        <div class="content-box">
                            <h3>Brow Lamination</h3>
                            <div class="content-text">
                                É um tratamento para as sobrancelhas que as deixa alinhadas, e nela cria-se um efeito wild
                                (selvagem), proporcionando volume e cobertura de falhas. Sua durabilidade é de 4 a 6
                                semanas.
                            </div>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/sobrancelha-micro-shadow.png"
                                alt="Micropigmentação na sobrancelha com técnica shadow">
                        </div>
                        <div class="content-box">
                            <h3>Micropigmentação shadow</h3>
                            <div class="content-text">
                                Técnica que cobre falhas, preenche as sobrancelhas e corrige assimetrias. O foco é a
                                naturalidade, deixando apenas um sombreado leve. É realizado design personalizado,
                                valorizando e harmonizando cada rosto dentro da própria medida facial (sem afinar). Permite
                                praticidade no dia a dia, com uma longa durabilidade, sendo ela de 8 meses a 1 ano e meio.
                            </div>
                        </div>
                    </div>

                    <div class="overlay-product">
                        <div class="overlay-product-image">
                            <img src="/assets/img/catalog/sobrancelha-micro-fio.png"
                                alt="Micropigmentação na sobrancelha com técnica fio a fio">
                        </div>
                        <div class="content-box">
                            <h3>Micropigmentação fio a fio</h3>
                            <div class="content-text">
                                Essa técnica imita os fios reais da sobrancelha, cria volume, corrige falhas e assimetrias.
                                Ideal para quem gosta da máxima naturalidade e deseja apenas preencher as sobrancelhas. É
                                realizado design personalizado, valorizando o máximo de pelos possíveis. Sua durabilidade é
                                de 8 meses a 1 ano.
                            </div>
                        </div>
                    </div>
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
