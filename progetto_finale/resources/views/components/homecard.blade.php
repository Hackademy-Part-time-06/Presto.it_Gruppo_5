<div class="card h-100">
    <a href="#"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <h3>{{ $latestarticle->title }}</h3>
            <hr>
        </h4>
        <p class="card-text">Prezzo: {{ $latestarticle->price }}</p>
        <p class="card-text">Categoria: {{ $latestarticle->category->name }}</p>
        <button class="custom-btn btn-6 ps-3 pe-3"><span><a href="{{ route('articles.show', $latestarticle) }}"
                    class="textDecA">Dettagli</a></span></button>

    </div>
</div>
