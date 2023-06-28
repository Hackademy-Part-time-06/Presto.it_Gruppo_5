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

            <div class="col-md-6" >
                <div class="lista">
                    <ul class="bg-light list-group">
                        <li class="list-group-item">Title: {{ $article->title }}</li>
                        <li class="list-group-item">Price: {{ $article->price }}</li>
                        <li class="list-group-item">Description: {{ $article->description }}</li>
                        <li class="list-group-item">User: {{ $article->user_id }}</li>
                        <li class="list-group-item">And a fifth one</li>
                      </ul>
                <ul>
                    <li>
                        Title: {{ $article->title }}
                    </li>
                    <li>
                        Price: {{ $article->price }}
                    </li>
                    <li>
                        Description: {{ $article->description }}
                    </li>
                    <li>
                        User: {{ $article->user_id }}
                    </li>
                </ul>
                <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                <livewire:article-delete-form :article="$article" />
                </div>

            </div>
        </div>
    </div>
</x-main>
