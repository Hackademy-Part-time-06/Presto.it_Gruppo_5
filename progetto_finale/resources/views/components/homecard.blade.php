<div class="card h-100">
    <a href="#"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <h3>{{ $latestarticle->title }}</h3>
            <hr>
        </h4>
        <p class="card-text">Prezzo: {{ $latestarticle->price }}</p>
        <p class="card-text">Categoria: {{ $latestarticle->category->name }}</p>
        <a href="{{ route('articles.show', $latestarticle) }}" class="btn btn-outline-secondary">See
            details</a>
    </div>
</div>

