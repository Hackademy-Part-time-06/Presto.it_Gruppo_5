<x-main>
    <div class="container mt-5">
        <div class="row pt-5">
            <x-search-bar />
        </div>
        <div class="row my-5">
            <x-article-index-list :articles="$articles" />
        </div>
    </div>
</x-main>