<x-main>

    <div class="container ">

        <div class="row">
            <div class="search-box">
                <h2 class="text-white mt-5 mb-5">{{ __('messages.searchTitle') }}</h2>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 search-position-box">
                <h4 class="search-position-scritta">{{ __('messages.category') }}</h4>

                <form action="{{ route('category.search') }}" method="GET" class="d-flex" id="search-form">

                    <select class="mb-3 form-select shadow" id="select_category" name="id"
                        aria-label="Default select example">
                        <option selected>{{ __('messages.allCategories') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                    <button id="search-button" class="btn btn-outline-success" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>

            </div>
            <div class="col-lg-4 col-sm-6 mb-4 search-position-box">
                <h4 class="search-position-scritta">{{ __('messages.registerName') }}</h4>
                <x-search-bar />
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 search-position-box">
                <h4 class="search-position-scritta">{{ __('messages.description') }}</h4>
                <x-search-bar />
            </div>

        </div>

        <div class="row ">
            <x-article-index-list :articles="$articles" />
        </div>
    </div>
</x-main>
