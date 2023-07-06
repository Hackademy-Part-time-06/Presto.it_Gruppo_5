<x-main>

    <div class="container">
        <form action="{{route('articles.search')}}" method="GET" class="my-5">
            <input type="search" name="searched" class="form-control my-2" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <x-article-index-list :articles="$articles" />
    </div>
</x-main>
