<x-main>
    <ul class="list-group">
        @foreach($articles as $article)
            <li class="list-group-item">{{$article->title}}</li>
        @endforeach
    </ul>
</x-main>