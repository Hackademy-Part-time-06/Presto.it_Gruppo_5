
        
            @forelse ($articles as $article)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="@if($latestarticle->images->isEmpty()) https://via.placeholder.com/700x400 @else {{$latestarticle->images->first()->getUrl(300 , 300)}} @endif"
                                alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>{{ $article->title }}</h3>
                                <hr>
                            </h4>
                            <p class="card-text">{{ __('messages.price') }} {{ $article->price }}</p>

                            <p class="card-text">{{ __('messages.description') }} {{ $article->description }}</p>


                            <p class="card-text">{{ __('messages.category') }} {{ $article->category->name }}</p>
                            <!-- Details Button -->
                            <a href="{{ route('articles.show', $article) }}"
                                class="btn btn-sm btn-outline-info">{{ __('messages.detailsBtn') }}</a>
                            @auth
                                @if ($article->user_id == Auth::user()->id)
                                    <!-- Edit button -->
                                    <a href="{{ route('articles.edit', $article) }}"
                                        class="btn btn-sm btn-outline-warning">{{ __('messages.modifying') }}</a>
                                    <!-- Delete button -->
                                    <livewire:article-delete-form :article="$article" />
                                @endif
                            @endauth

                        </div>
                    </div>
                </div>
            @empty
                <h1 class="text-white text-center">{{ __('messages.searchError') }}</h1>
            @endforelse
            {{ $articles->links() }}
        </div>
       
      
