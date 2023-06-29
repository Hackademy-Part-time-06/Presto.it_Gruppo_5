<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-3">
            <select class="mb-3 form-select shadow" id="select_category" name="select_category"
                aria-label="Default select example">
                <option selected>Tutte le categorie</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-3 p-1">
            <button type="submit" class="btn btn-outline-dark btn-sm ">Sort</button>
        </div>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://via.placeholder.com/700x400"
                                alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>{{ $article->title }}</h3>
                                <hr>
                            </h4>
                            <p class="card-text">Prezzo: {{ $article->price }}</p>

                            <p class="card-text">Descrizione: {{ $article->description }}</p>

                            <p class="card-text">Categoria: {{ $article->category->name }}</p>
                            <a href="{{ route('articles.show', $article) }}"
                                class="btn btn-sm btn-outline-info">Dettagli</a>
                            <a href="{{ route('articles.edit', $article) }}"
                                class="btn btn-sm btn-outline-warning">Modifica</a>
                            <livewire:article-delete-form :article="$article" />
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $articles->links() }}
        </div>
        <!-- Pagination -->
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.container -->
