@foreach ($articles as $article)
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card h-100 box_shadow wrapper">
            <a href="#"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <h3>{{ $article->title }}</h3>
                    <hr>
                </h4>
                <p class="card-text">{{ __('messages.price') }} {{ $article->price }} €</p>

                <p class="card-text">{{ __('messages.description') }} {{ $article->description }}</p>

                <p class="card-text">{{ __('messages.category') }} {{ $article->category->name }}</p>


                <button class="custom-btn btn-5"><span><a href="{{ route('articles.show', $article) }}"
                            class="">{{ __('messages.detailsBtn') }}</a></button>

                <button class="custom-btn btn-5"><span> <a href="{{ route('articles.edit', $article) }}"
                            class="">{{ __('messages.modifying') }}</a></span></button>

                <livewire:article-delete-form :article="$article" />
            </div>
        </div>
    </div>
@endforeach

{{ $articles->links() }}
