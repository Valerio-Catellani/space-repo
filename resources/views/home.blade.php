@extends('layouts.app')

@section('title', 'BoolXtravell')

@section('content')
<main>
    <section id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex flex-column justify-content-center p-3">
                    <h2 class="py-4">About us
                    </h2>
                    <p class="py-4">
                        BoolXTravell è stata fondata nel 2030 da un gruppo di visionari, scienziati e ingegneri spaziali. <strong>La nostra missione è semplice</strong>: rendere lo spazio accessibile a tutti. Siamo convinti che l’esplorazione spaziale <strong>non debba essere riservata solo</strong> agli astronauti, ma debba essere aperta a chiunque abbia la curiosità di scoprire nuovi mondi, incontrare civiltà aliene e ammirare la bellezza delle stelle.
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center p-3">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/italia-nello-spazio.avif" class="d-block w-100 h-100 " alt="italy-in-space">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/img-1.jpg" class="d-block w-100 h-100" alt="jwt">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/img-2.jpg" class="d-block w-100 h-100 " alt="interstellar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="offers">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div id="animated" class="w-100"></div>
                </div>

                <div class="col-6 d-flex flex-column justify-content-center p-3">
                    <h2 class="py-4 ">Che cosa offriamo </h2>
                    <ul>
                        <li>
                            <p>
                                <strong>Destinazioni Interplanetarie:</strong> Da Marte a Europa (la luna di Giove), BoolXTravel ti porta nei luoghi più emozionanti del sistema solare. Immagina passeggiare sulla superficie di Marte o ammirare i geyser di Europa!
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Viaggi Stellari:</strong> Siamo i pionieri dei viaggi interstellari. Attraverso wormhole e warp drive, ti portiamo verso stelle lontane e pianeti alieni. Preparati a vedere sistemi solari completamente diversi dal nostro.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Hotel Galattici:</strong> I nostri hotel spaziali offrono viste mozzafiato su pianeti, stelle e galassie. Svegliati con un’alba su Alpha Centauri o goditi un tramonto su un pianeta gassoso.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Esperienze Extraterrestri:</strong> Vuoi incontrare gli alieni? Organizziamo tour verso pianeti abitati da forme di vita aliene. Non preoccuparti, abbiamo traduttori universali per comunicare con loro!
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section id="us">
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <h2 class="py-4">Chi siamo</h2>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Davide Alovisio</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Valerio Catellani</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Elisa Mavilia</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Eldin Balje</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Stefano D’aniello</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
</main>

@endsection