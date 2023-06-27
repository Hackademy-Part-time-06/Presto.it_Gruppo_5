<x-main>
    <h1 class="text-center">Articles.show</h1>
    <div class="container">
        <ul>
            <li>
                Title: {{$article->title}}
            </li>
            <li>
                Price: {{$article->price}}
            </li>
            <li>
                Description: {{$article->description}}
            </li>
        </ul>
        <a href="{{route('articles.edit', $article)}}" class="btn btn-sm btn-outline-warning">Edit</a>
        <livewire:article-delete-form :article="$article"/>
    </div>
</x-main>