<x-main>

    <div class="container">
        <h1 class="text-white text-center mt-5">
            {{ $article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
        </h1>
        <div class="row">
            <div class="col-md-6">
                @if ($article_to_check)
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
                            @if ($article_to_check->images)
                                <div class="carousel-inner" >
                                    @foreach ($article_to_check->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img class="img-fluid" src="{{Storage::url($image->path)}}" alt="..." />
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
    
                    </section>

            </div>

            <div class="col-md-6">
                <div class="lista  sfondo-carosello">
                    <h1 class="display-5 fw-bolder py-2">{{ $article_to_check->title }}</h1>
                    <p>{{ __('messages.price') }} {{ $article_to_check->price }}</p>
                    <hr>
                    <p>{{ __('messages.description') }} {{ $article_to_check->description }}</p>
                    <hr>
                    <p>User: {{ $article_to_check->user_id }}</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="btn btn-success shadow">{{ __('messages.revAccept') }}</button>
                                </form>

                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="btn btn-danger shadow">{{ __('messages.revReject') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endif
</x-main>
