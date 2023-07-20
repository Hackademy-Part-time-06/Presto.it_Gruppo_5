<x-main>

    <div class="container ">
        <div class="row my-3">
            <div class="col my-5">
                <x-search-bar />
            </div>
        </div>
        <div class="row ">
            <x-article-index-list :articles="$articles" />
        </div>
    </div>
</x-main>
