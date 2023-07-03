<x-main>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1 class="display-2">
                    {{ article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h1>

                @if (article_to_check)

                    {{-- carosello --}}
                    <section class="mt-4 mx-4">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner" style="height: 450px;">
                                <div class="carousel-item active">
                                    <img class="img-fluid" src="/media/lavandino.jpeg" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid" src="/media/lavandino.jpeg" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid" src="/media/lavandino.jpeg" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </section>
            </div>

            <div class="col-md-6">
                <div class="lista">
                    <h1 class="display-5 fw-bolder py-2">{{ $article->title }}</h1>
                    <p>Prezzo: {{ $article->price }}</p>
                    <hr>
                    <p>Descrizione: {{ $article->description }}</p>
                    <hr>
                    <p>User: {{ $article->user_id }}</p>
                    <hr>
                    <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">Accetta</button>
                    </form>

                    <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>


</x-main>
