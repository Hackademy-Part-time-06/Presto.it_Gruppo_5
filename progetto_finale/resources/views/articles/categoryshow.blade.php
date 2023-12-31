<x-main>
    <div class="container">
        <div class="row mt-5">
            @forelse ($articles as $article)
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="card h-100">
                        <img class="logo"src="{{url('media/Logo.png')}}" alt="Watermark">
                        <a href="#"><img class="card-img-top" src="@if ($article->images->isEmpty()) {{url('media/default-img.gif')}} @else {{ $article->images->first()->getUrl(300, 300) }} @endif"
                                alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <h3>{{ $article->title }}</h3>
                                <hr>
                            </h4>
                            <a href="{{ route('articles.show', $article) }}"
                                class="btn btn-outline-secondary">{{ __('messages.detailsBtn') }}</a>

                        </div>
                    </div>
                </div>
            @empty
                <div class="d-flex justify-content-center ">
                    <div class="col-lg-4 col-sm-6 altezza-articoli">

                        <h1>{{ __('messages.notAnnouncement') }}</h1>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    {{--  <div class="container mt-5">
        <ul class="list-group">
            @forelse ($articles as $article)
            <li class="list-group-item">
                {{$article->title}}
            </li>
            @empty
                <h1>non ci sono articoli appartenenti a questa categoria</h1>
            @endforelse
        </ul>
    </div> --}}
</x-main>
