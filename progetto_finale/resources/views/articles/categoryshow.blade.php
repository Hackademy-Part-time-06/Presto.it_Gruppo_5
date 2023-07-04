<x-main>
    <div class="container mt-5">
        <ul class="list-group">
            @forelse ($articles as $article)
            <li class="list-group-item">
                {{$article->title}}
            </li>
            @empty
                <h1>non ci sono articoli appartenenti a questa categoria</h1>
            @endforelse
        </ul>
    </div>
</x-main>