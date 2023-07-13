<x-main>
    <div class="container">

        <div class="row">

            <div class="col-md-6">
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
                        @if ($article->images)
                            <div class="carousel-inner" style="height: 450px;">
                                @foreach ($article->images as $image)
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

            <div class="col-md-6 ">
                <div class="lista sfondo-carosello">
                    <h1 class="display-5 fw-bolder py-2">{{ $article->title }}</h1>
                    <p>{{ __('messages.price') }} {{ $article->price }} {{ $article->price }}</p>
                    <hr>
                    <p>{{ __('messages.description') }} {{ $article->description }}</p>
                    <hr>
                    <p>User: {{ $article->user_id }}</p>
                    <hr>
                    @auth
                        @if ($article->user_id == Auth::user()->id)
                            <!-- Edit button -->
                            <a href="{{ route('articles.edit', $article) }}"
                                class="btn btn-outline-secondary text-info btn-sm m-3">Modifica</a>
                            <!-- Delete button -->
                            <livewire:article-delete-form :article="$article" />
                        @endif
                    @endauth

                </div>
            </div>
        </div>

</x-main>
